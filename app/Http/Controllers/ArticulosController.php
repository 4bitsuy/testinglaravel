<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    //
    public function todos(){
      dd(\App\Articulo::all());
    }
}
