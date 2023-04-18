<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



//Primera forma - accediendo solo a la vista
//Estableciendo otras rutas en php donde se establece el nombre de la carpeta "marcas" con "." y despues
//el nombre del archivo
// Route::get('/brands', function () {
//     return view('brands.index');
// });

//Segunda forma - accedientdo solo a un metodo
//Route::get('/brands/create',[BrandsController::class, 'create']);

//Terceta forma
//Accediendo a todos los elementos
Route::resource('brands',BrandsController::class);
Auth::routes();

Route::get('/home', [BrandsController::class, 'index'])->name('home');

//Ruta que confirmara y actuara en caso de que el usuario ya haya iniciado sesíon
Route::group(['middleware'=>'auth'],function(){
    Route::get('/',[BrandsController::class,'index'])->name('home');
});
