<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    
	public function index($pagina = 1){

		$titulo = 'Listado de mis Peliculas';

		return view('pelicula.index', array(
			'titulo' => $titulo,
			'pagina' => $pagina
		));
	}

	public function detalle($year = null){
		return view('pelicula.detalle');
	}

	public function redirigir(){
		//return redirect()->action('PeliculaController@detalle');
		return redirect('/');
	}

	public function formulario(){
		return view('pelicula.formulario');
	}

	public function recibir(Request $request){
		$nombre = $request->input('nombre');
		$email = $request->input('email');

		return 'El nombre es: '.$nombre.' y el correo es: '.$email;
	}

}
