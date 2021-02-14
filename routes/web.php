<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});
Route::get('/client', function () {
    return view('client');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/vente', function () {
    return view('vente');
});
Route::get('/categorie', function () {
    return view('categorie');
});
Route::get('/agent', function () {
    return view('agent');
});
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
Route::get('/fournisseur', function () {
    return view('fournisseur');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/produit', function () {
    return view('produit');
});
Route::get('/tableau', function () {
    return view('tableau');
});
Route::get('/stock', function () {
    return view('stock');
});