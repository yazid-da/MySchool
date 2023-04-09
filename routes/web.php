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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/fourniture', function () {
    return view('fourniture');
});
Route::get('/pagenotfound', function () {
    return view('404');
}); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








/*Admin + Dashboard routes*/
Route::middleware(['auth','isAdmin'])->group(function() {
    Route::get('/dashboard','Admin\DashboardController@index');
    //Route::get('/dashboard', 'Admin\DashboardController@showlist');//shows users in dashboard.blade.php (adminpanel)
    

    /*users routes*/
    //Route::get('/dashboard/utilisateurs', 'Admin\UserController@index'); // shows admin/utilisateurs.blade.php
    //Route::get('/dashboard/utilisateurs', 'Admin\UserController@showuserlist'); //shows users in admin/utilisateurs.blade.php


    /* Categories routes*/
    /*Route::get('/dashboard/categories', 'Admin\CategorieController@index'); // shows admin/categories.blade.php  
    Route::get('/dashboard/categories', 'Admin\CategorieController@showcategorielist'); //shows categories in admin/categories.blade.php
    Route::post('insert-categorie', 'Admin\CategorieController@store'); // Inserer une catégorie
    Route::get('edit-categorie/{id}','Admin\CategorieController@edit'); // modifier une catégorie
    Route::put('update-categorie/{id}','Admin\CategorieController@update'); // MàJ une catégorie
    Route::get('delete-categorie/{id}','Admin\CategorieController@destroy'); // Supprimer une catégorie
    
    /* produits routes*/
    /*Route::get('/dashboard/produits', 'Admin\ProduitController@index'); // shows admin/produits.blade.php      
    Route::get('/dashboard/ajout-produit', 'Admin\ProduitController@indexaddprod'); // shows admin/addproduit.blade.php  
    Route::get('/dashboard/produits', 'Admin\ProduitController@showproduitlist'); //shows produits in admin/produits.blade.php
    Route::get('/dashboard/ajout-produit', 'Admin\ProduitController@returncategorie'); // categorie list
    Route::post('inserer-produit', 'Admin\ProduitController@store'); // Inserer un produit
    Route::get('edit-produit/{id}','Admin\ProduitController@edit'); // modifier un produit
    Route::put('update-produit/{id}','Admin\ProduitController@update'); // MàJ un produit
    Route::get('delete-produit/{id}','Admin\ProduitController@destroy'); // Supprimer un produit*/

});