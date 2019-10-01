<?php

namespace App\Repository\Fields;

use App\Field;
use App\Page;
use App\Template;

class FieldsRepository {

    public static function generateFieldsForLanguage($lang)
    {
        $pages = Page::all();

        foreach($pages as $page) {
            $languageMain = \App\Http\Middleware\LocaleMiddleware::$mainLanguage;

            $donor = Field::where('location', '=', $page->location)
                ->where('language', '=', $languageMain)
                ->get();

            $languages = \App\Http\Middleware\LocaleMiddleware::loadLanguages();

            $templates = Template::all();

            foreach($templates as $temp) {


                    foreach($donor as $d) {
                        $create = Field::create([
                            'name' => $d->name,
                            'type' => $d->type,
                            'placeholder' => $d->placeholder,
                            'location' => $page->location,
                            'template' => $temp->path,
                            'order' => $d->order,
                            'language' => $lang
                        ]);
                    }


            }
        }


        return 1;

    }

}
