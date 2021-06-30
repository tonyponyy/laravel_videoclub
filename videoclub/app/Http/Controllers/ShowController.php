<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function ver ($id){
        return view('paginas/show',['id' => $id] );
    }
}
