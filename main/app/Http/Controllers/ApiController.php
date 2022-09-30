<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    function sortString(Request $request){
        $word = $request->word;

        $word_array = str_split($word);
        sort($word_array);
        $word = implode($word_array);

        return response()->json([
            "status" => "Success",
            "word" => $word
        ]);
    }


}
