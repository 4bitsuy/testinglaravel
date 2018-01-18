<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller {

    public function ver($id){
        return view ('categoria', ['id' => $id]);
    }

    public function recibirPost(Request $request){
        echo $request->path();
        echo "<br>";
        echo $request->url();
    }

}
