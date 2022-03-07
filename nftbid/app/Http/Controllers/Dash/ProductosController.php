<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
class ProductosController extends Controller
{
    public function miFuncion(){
        $categorias = \DB::table('categories')->get();
        //dd($categorias);
        return view('dashboard.productos')->with('categorias',$categorias);
    }
    public function insertar(Request $req){
        //dd($req);
        $validacion = Validator::make($req->all(), [
        'name'=>'required|min:4|max:100',
        'description'=>'required|min:5',
        'price'=>'required',
        'img'=>'required|mimes:jpg,jpeg,png,webp|max:2000',
        'btype'=>'required',
        'cate'=>'required'
       ]);
       if($validacion->fails()){
        return back()->withInput()
                        ->with('ErrorInsert','Favor de llenar todos los campos')
                        ->withErrors($validacion);
       }else{
        echo "YEAAAAAAAAAAAA";
       }
    }//LLave funcion
}
