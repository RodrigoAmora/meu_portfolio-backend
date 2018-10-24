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
use App\Http\Services\ProjetosService;


Route::get('/', 'Controller@index');

Route::get('admin', 'AdminController@index')->name('admin');

Route::get('/contato', function () {
	return view('contato');
});

Route::post('/enviarEmail', 'ContatoController@enviarEmail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projetos', 'ProjetoController@listarTodosOsProjetos');
Route::post('salvarProjeto', 'ProjetoController@salvarProjeto');
Route::get('novoProjeto', function () {
	return view('projetos/salvar');
});

Route::post('/autenticar', 'Auth\LoginController@authenticate');

//Endpoints da API
Route::group(['prefix' => 'api'], function() {
	Route::group(['prefix' => 'projetos'], function() {
		Route::get('projetosPessoais', function() {
			$service = new ProjetosService();
			return $service->listarProjetosPessoaisAPI();
		});
	});
});

Auth::routes();
