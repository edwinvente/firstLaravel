<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('entrada');
});

/*
Route::get('listado', function(){
	$personas = array('Edwin Venté', 'Sebastian Garcia');
	return view('pruebas.listados')->with('personas', $personas);
}); 

Route::post('/marketing', 'MarketingController@store');
Route::get('/pelicula/{titulo?}/{year?}', function($titulo = 'No hay pelicula', $year = 2019){
	return view('pelicula', array(
		'titulo' => $titulo,
		'year' => $year
	));
})->where(array(
	'titulo' => '[a-zA-Z]+',
	'year' => '[0-9]+'
));

Route::get('listado-peliculas', function(){
	$titulo = 'Listado de Peliculas';
	$listado = array('Batman', 'Spiderman', 'Wolverine');
	return view('peliculas.listado')
			->with('titulo', $titulo)
			->with('listado', $listado);
});

Route::get('/pagina-generica', function(){
	return view('pagina');
}); */

Route::get('/pelicula/{pagina?}', 'PeliculaController@index');
Route::get('/detalle/{year?}', [
	'middleware' => 'testyear',
	'uses' => 'PeliculaController@detalle',
	'as' => 'detalle.pelicula'
]);


Route::get('/redirigir', 'PeliculaController@redirigir');
Route::resource('usuario', 'usuarioController');
Route::get('/formulario', 'PeliculaController@formulario');
Route::post('/recibir', 'PeliculaController@recibir');

//rutas de las frutas
Route::group(['prefix'=>'frutas'], function(){
	Route::get('index', 'FrutaController@index');
	Route::get('detail/{id}', 'FrutaController@detail');
	Route::get('crear', 'FrutaController@create');
	Route::post('save', 'FrutaController@save');
	Route::get('delete/{id}', 'FrutaController@delete');
	Route::get('edit/{id}', 'FrutaController@edit');
	Route::post('update', 'FrutaController@update');
	Route::get('datajs', 'FrutaController@datosjs');
});

Route::get('/prueba', 'FrutaController@datosjs');
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

//Ruta de somos creandola web
Route::get('/SomosCreandola', 'WebController@index');