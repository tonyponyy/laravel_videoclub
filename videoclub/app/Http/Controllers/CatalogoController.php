<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function ver ($id){
        return view('paginas/modificar',['id' => $id] );
    }
}
