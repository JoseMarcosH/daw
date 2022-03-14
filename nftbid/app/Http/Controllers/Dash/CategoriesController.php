<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        $cates = \DB::table('categories')->get();
        return view('dashboard.categories')->with('cates',$cates);
    }
    public function store(Request $req){
        $validacion = Validator::make($req->all(), [
            'name'=>'required|min:4|max:100',
            'img'=>'required|mimes:jpg,jpeg,png,webp|max:2000',
           ]);
           if($validacion->fails()){
            return back()->withInput()
                            ->with('ErrorInsert','Favor de llenar todos los campos')
                            ->withErrors($validacion);
           }else{
            $img = $req->file('img');
            $name = time(). '.' .$img->getClientOriginalExtension(); 
            //dd($name);
            $destination_path=public_path('categories');//se trae la carpeta public
            $req->img->move($destination_path, $name);
            Category::create([
                'category'=>$req->name,
                'img'=>$name
            ]);
            return back()->with('Listo','Se ha insertado correctamente');
           }
    }
}
