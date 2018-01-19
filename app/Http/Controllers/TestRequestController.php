<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequestController extends Controller{
    public function recibir(Request $request){
        if($request->isMethod('post')){
            echo "Estoy recibiendo por post";
        }else{
            echo "Estoy recibiendo por get";
        }
    }
}
