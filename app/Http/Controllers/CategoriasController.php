<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller {

    public function ver($id){
        return view ('categoria', ['id' => $id]);
    }

}
