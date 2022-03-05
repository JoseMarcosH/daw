<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function miFuncion(){
        $categorias = \DB::table('categories')->get();
        //dd($categorias);
        return view('dashboard.productos');
    }
}
