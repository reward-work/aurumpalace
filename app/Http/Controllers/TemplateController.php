<?php

namespace App\Http\Controllers;
use App\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function set(Request $request) {

        if(!$request->input('template')) {
            return response()->json([
                'type' => 0,
                'message' => 'Not data'
            ]);
        }

        $exists = Template::where('path', '=', $request->input('template'))->first();
        if($exists == null) {
            return response()->json([
                'type' => 0,
                'message' => 'Template not found'
            ]);
        }

        // if all good

        $removeOldSet = Template::where('set', '=', 1)->update([
            'set' => 0,
        ]);
        if(!$removeOldSet) {
            return response()->json([
                'type' => 0,
                'message' => 'error operation'
            ]);
        }

        $update = Template::where('path', '=', $request->input('template'))->update([
            'set' => 1,
        ]);

        if($update) {
            return response()->json([
                'type' => 200,
                'message' => 'Template update successful!',
            ]);
        }


        return response()->json([
            'type' => 0,
            'message' => 'Error operation'
        ]);

    }
}
