<?php

namespace App\Http\Controllers;
use App\Http\Requests\FieldsRequest;
use App\Repository\Fields\FieldsRepository;
use Storage;
use Illuminate\Http\Request;
use App\Field;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\FileUploaderController;
use Illuminate\Support\Str;
use App\Page;
class FieldsController extends Controller
{

    public function edit($location) {
        if(!$location) {
            return back();
        }
        $page = Page::where('location', '=', $location)->first();

        $fields = Field::where('location', '=', $location)
            ->where('language', '=', (\App\Http\Middleware\LocaleMiddleware::getLocale() ? \App\Http\Middleware\LocaleMiddleware::getLocale() : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))

            ->orderBy('order', 'ASC')
            ->get();
        return view('aurum.adminLTE.fields_page', compact('fields', 'location', 'page'));
    }



    public function store(FieldsRequest $request) {
        $language = \App\Http\Middleware\LocaleMiddleware::getLocale();
        if($request->input('page_slug')) {
            $slug = Str::slug($request->input('page_slug'), '-');
            $pageSlug = Page::where('location', '=', $request->input('index'))->update(['slug' => $slug]);
        }




        if($_FILES) {
            foreach($_FILES as $key => $file) {
                if($request->hasFile($key)) {
                    $upload = FileUploaderController::upload($request->file($key));
                    $updateField = Field::where('language', '=', ($language ? $language : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
                        ->where('name', '=', $key)
                        ->where('location', '=', $request->input('index'))
                        ->update([
                            'value' => $upload
                        ]);

                }

            }

        }

        foreach($request->except('location', '_token', 'page_slug') as $key => $input) {
            if($request->file($key)) continue;


            $update = Field::where('language', '=', ($language ? $language : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
                                ->where('name', '=', $key)

                                ->where('location', '=', $request->input('index'))
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
