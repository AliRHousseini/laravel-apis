<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // custom function to sort according to deifined function
    function my_sort($a,$b){
        if (($a.upper() == $b.upper()) and ($a<$b)){
            return -2;}
        elseif ($a.upper() < $b.upper()){
        return -1;}
        elseif( $a == $b){
        return 0;}
        else{ return 1;}
    }

    // get the requested string and sort it by usort using the function above
    function sortString(Request $request){
        $word = $request->word;

        $word_array = str_split($word);
        usort($word_array,"my_sort");
        $word = implode($word_array);

        return response()->json([
            "status" => "Success",
            "word" => $word
        ]);
    }

    function getUsers(){
        return "hiasdhashd";
    }


}
