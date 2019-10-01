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
            $template = Template::where('set', '=', 1)->first();

            $donor = Field::where('location', '=', $page->location)
                ->where('language', '=', $languageMain)
                ->get();


            $languages = \App\Http\Middleware\LocaleMiddleware::loadLanguages();

            $templates = Template::all();

            foreach($donor as $d) {
                $item = Field::find($d->id);
                $clone = $item->replicate();
                $clone->save();
                $clone->value = '';
                $clone->language = $lang;
                $save = $clone->save();

            }


        }


        return 1;

    }

}
