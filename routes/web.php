<?php

use App\Http\Controllers\FooController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return "Hello Denny";
    //return ['app'=> 'kppp'];
});

Route::get('/home', function () {
    return [
        'nama' => 'Aplikasi KJPP'
    ];
});

// Route::get('/db', function () {
//     $rows = DB::select("select * from tbl_pp limit 10", []);
//     dd($rows);
// });

Route::get('/foo', [FooController::class, 'index']);

Route::get('/baz', [FooController::class, 'getKJPP']);