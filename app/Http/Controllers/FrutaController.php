<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

header("Access-Control-Allow-Origin: *");

class FrutaController extends Controller
{
    public function index(){
    	$frutas = DB::table('frutas')
    			->orderBy('id', 'desc')
    			->get();

    	return view('fruta.index', [
    		'frutas' => $frutas
    	]);
    }

    public function datosjs(){
    	$frutas = DB::table('frutas')
    			->orderBy('id', 'desc')
    			->get();
    	return json_encode($frutas);
    }

    public function detail($id){
    	$fruta = DB::table('frutas')->where('id', '=', $id)->first();

    	return view('fruta.detail', [
    		'fruta' => $fruta
    	]);
    }

    public function create(){
    	return view('fruta.create');
    }

    public function save(Request $request){
    	//Guardar el registro
    	$fruta = DB::table('frutas')->insert(array(
    		'nombre' => $request->input('nombre'),
    		'descripcion' => $request->input('descripcion'),
    		'precio' => $request->input('precio'),
    		'fecha' => now()
    	));

    	return redirect()->action('FrutaController@index')->with('status', 'Fruta creada correctamente');
    }

    public function delete($id){
    	$fruta = DB::table('frutas')->where('id', $id)->delete();
    	return redirect()->action('FrutaController@index')->with('status', 'Fruta borrada correctamente');
    }

    public function edit($id){
    	//sacar la fruta de la base de datos si existe
		$fruta = DB::table('frutas')->where('id', $id)->first();

		return view('fruta.create', [
			'fruta' => $fruta
		]);    	
    }

    public function update(Request $request){
    	$fruta = DB::table('frutas')->where('id', $request->input('id'))
    								->update(array(
    									'nombre' => $request->input('nombre'),
    									'descripcion' => $request->input('descripcion'),
    									'precio' => $request->input('precio')
    								));
    	return redirect()->action('FrutaController@index')->with('status', 'Fruta editada corerctamente'); 
    }
}
