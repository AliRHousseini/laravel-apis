<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    function getUsers(){
        dd("asdasdasd");
        return "HI from here";
    }

    function addUser(Request $request){
        $name = $request->name;
        $age = $request ->age;

        return response()->json([
            "status" => "Success",
            "message" => $age
        ]);
    }


}
