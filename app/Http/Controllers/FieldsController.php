<?php

namespace App\Http\Controllers;
use App\Http\Requests\FieldsRequest;
use Storage;
use Illuminate\Http\Request;
use App\Field;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\FileUploaderController;
class FieldsController extends Controller
{

    public function edit($location) {
        if(!$location) {
            return back();
        }

        $fields = Field::where('location', '=', $location)
            ->where('language', '=', (\App\Http\Middleware\LocaleMiddleware::getLocale() ? \App\Http\Middleware\LocaleMiddleware::getLocale() : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
            ->where('template', '=', Cookie::get('template'))
            ->orderBy('order', 'ASC')
            ->get();
        return view('aurum.adminLTE.fields_page', compact('fields', 'location'));
    }



    public function store(FieldsRequest $request) {
        $language = \App\Http\Middleware\LocaleMiddleware::getLocale();
        if($_FILES) {
            foreach($_FILES as $key => $file) {
                if($request->hasFile($key)) {
                    $upload = FileUploaderController::upload($request->file($key));
                    $updateField = Field::where('language', '=', ($language ? $language : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
                        ->where('name', '=', $key)
                        ->where('template', '=', Cookie::get('template'))
                        ->update([
                            'value' => $upload
                        ]);

                }

            }

        }

        foreach($request->except('location', '_token') as $key => $input) {
            $update = Field::where('language', '=', ($language ? $language : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
                                ->where('name', '=', $key)
                                ->where('template', '=', Cookie::get('template'))
                                ->where('location', '=', $request->input('location'))
                                ->update([
                                    'value' => $input
                                ]);
        }


        return back()->with('message_success', 'Success update');
    }


    public static function createField($name,$val,$location) {
        $data = [
            'name' => $name,
            'value' => $val,
            'location' => $location,

        ];
        $placeholder = Field::where('name', '=', $name)->where('placeholder', '!=', NULL)->first();
        if($placeholder) {
            $data['placeholder'] = $placeholder->placeholder;
            $data['type'] = $placeholder->type;
            $data['order'] = $placeholder->order;
        }
        $data['language'] = \App\Http\Middleware\LocaleMiddleware::getLocale();

        $create = Field::create($data);

        if($create) {
            return true;
        }

        return false;
    }
}
