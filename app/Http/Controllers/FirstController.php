<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller {
    // usando la funcion Request...
    public function editar(Request $request, $id){
      echo "Recibo $id como parámetro de la ruta. <br>";
      echo "Además recibimos estos datos por formulario: " . implode(', ', $request->all());
    }

    public function testFormulario() {
      return view ('formulario');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required|numeric'
        ]);

        echo 'Los datos estan validados, inserto en la bd';
    }
}
