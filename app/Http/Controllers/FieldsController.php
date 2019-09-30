<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use App\Field;
class FieldsController extends Controller
{
    const UPLOAD_MAX_SIZE = 2097152;


    public function edit($location) {
        if(!$location) {
            return back();
        }
        $fields = Field::where('location', '=', $location)->where('language', '=', \App\Http\Middleware\LocaleMiddleware::getLocale())->orderBy('order', 'ASC')->get();

        return view('aurum.adminLTE.fields_page', compact('fields', 'location'));
    }

    public static function uploadImage($file) {

            $name = uniqid() . '_' . $file->getClientOriginalName();



                $upload = Storage::disk('public')->put('images', $file);

            dd($upload);
            return $upload;

    }

    public function store(Request $request) {
        $currentLanguage = \App\Http\Middleware\LocaleMiddleware::getLocale();

        if($_FILES) {
            foreach($_FILES as $key => $file) {
                if($file['size'] > 0 && $file['size'] < self::UPLOAD_MAX_SIZE) {

                    $upload = self::uploadImage($request->file($key));


                    $checkIsset = Field::where(function($query) use($request,$key,$currentLanguage) {
                        $query->where('location', '=', $request->input('location'));
                        $query->where('name', '=', $key);
                        $query->where('language', '=', $currentLanguage);
                    })->first();

                    if(!$checkIsset) {
                        $create = self::createField($key,$upload,$request->input('location'));
                        if(!$create) {
                            return back()->with('message', 'Error');
                        }
                    }

                    Field::where(function($query) use($request,$key,$currentLanguage) {
                        $query->where('location', '=', $request->input('location'));
                        $query->where('name', '=', $key);
                        $query->where('language', '=', $currentLanguage);
                    })->update([
                        'value' => $upload
                    ]);

                }
            }
        }

        foreach($request->except(['location', '_token']) as $key => $i) {

            $checkIsset = Field::where(function($query) use($request,$key,$currentLanguage) {
                $query->where('location', '=', $request->input('location'));
                $query->where('name', '=', $key);
                $query->where('language', '=', $currentLanguage);
            })->first();

            if(!$checkIsset) {
                $create = self::createField($key,$i,$request->input('location'));
                if(!$create) {
                    return back()->with('message', 'Error');
                }
            }

            Field::where(function($query) use($request,$key,$currentLanguage) {
                $query->where('location', '=', $request->input('location'));
                $query->where('name', '=', $key);
                $query->where('language', '=', $currentLanguage);
            })->update([
                'value' => $i
            ]);

        }

        return back()->with('message_success', 'Success update');
    }


    public static function createField($name,$val,$location) {
        $data = [
            'name' => $name,
            'value' => $val,
            'location' => $location
        ];
        $placeholder = Field::where('name', '=', $name)->where('placeholder', '!=', NULL)->first();
        if($placeholder) {
            $data['placeholder'] = $placeholder->placeholder;
            $data['type'] = $placeholder->type;
        }
        $data['language'] = \App\Http\Middleware\LocaleMiddleware::getLocale();

        $create = Field::create($data);

        if($create) {
            return true;
        }

        return false;
    }
}
