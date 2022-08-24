<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('erros', 'AdminController@erros')->name('erros');

Route::get('Perfil', 'UsuarioController@perfil')->name('perfil');
Route::get('apagar/{id}', 'UsuarioController@apagar')->name('apagar');
Route::get('editar/{id}', 'UsuarioController@editar')->name('editar');
Route::get('Suporte', 'UsuarioController@suporte')->name('suporte')->middleware(['auth']);
Route::post('Addsuporte', 'UsuarioController@Addsuporte')->name('Addsuporte');
Route::get('Realizados', 'UsuarioController@showsuporte')->name('showsuporte')->middleware(['auth']);
Route::get('Pedentes', 'UsuarioController@show')->name('show')->middleware(['auth']);
Route::get('signOut', 'UsuarioController@signOut')->name('signOut');
Route::get('home', 'UsuarioController@home')->name('dashboard')->middleware(['auth']);
Route::post('update', 'UsuarioController@update')->name('update')->middleware(['auth']);
Route::get('Todos', 'UsuarioController@todos')->name('todos')->middleware(['auth']);

// Admin
Route::get('save', 'AdminController@save')->name('save');
Route::get('configuracao', 'AdminController@configuracao')->name('configuracao');
Route::get('admin', 'AdminController@index')->name('admin');
Route::post('autenticaco', 'AdminController@login')->name('autenticaco');
Route::get('AdminDashboard', 'AdminController@dashboard')->name('AdminDashboard');
Route::get('logout', 'AdminController@logout')->name('logout');
Route::get('usuario', 'AdminController@usuario')->name('usuario');
Route::get('pedidos', 'AdminController@pedidos')->name('pedidos');
Route::get('usuarios', 'AdminController@usuarios')->name('usuarios');
Route::get('usuario', 'AdminController@usuario')->name('AdminUsario');
Route::get('inativo', 'AdminController@inativo')->name('inativo');
Route::post('registar', 'AdminController@registar')->name('registar');
Route::get('finalizado', 'AdminController@finalizado')->name('finalizado');
Route::get('usuarioeditar/{id}', 'AdminController@usuarioeditar')->name('usuarioeditar');
Route::get('delete/{id}', 'AdminController@delete')->name('delete');
Route::get('deleteinativo/{id}', 'AdminController@deleteinativo')->name('deleteinativo');
Route::get('restaurar/{id}', 'AdminController@restaurar')->name('restaurar');
Route::get('actuliazar/{id}', 'AdminController@actuliazar')->name('actuliazar');
Route::get('finalizar/{id}', 'AdminController@finalizar')->name('finalizar');
Route::post('departamento', 'AdminController@departamento')->name('departamento');
Route::post('nivel', 'AdminController@nivel')->name('nivel');

require __DIR__ . '/auth.php';
