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

    
    function placeValue(Request $request){
        $word = $request->word;
        $rem = 0;
        $tenth =1;
        $i = 0;
        $arr=[];
        // walk through the integer and take the numbers value by value
        // each time multiply the reminder by 1, 10, 100 etc... untill the end
        // and add them in array respectivley.
        while($word >= 1){
            $rem = $word % 10;
            $word /= 10;
            $rem *= $tenth;
            $tenth *= 10;
            $arr[$i] = $rem;
            $i++;
        }
        //reverse the array to put start the number from the end
        // like [200,30,5] rather than [5,30,200]
        $sortedarr = rsort($arr);
        return response()->json([
            "status" => "Success",
            "word" => $arr
        ]);
    }

    function getUsers(){
        return "hiasdhashd";
    }


}
