<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
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
    return view('welcome');
});

// PRAKTIKUM 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
// Route::get('/about', function () {
//     echo "Nama: Farid Maulana <br>";
//     echo "NIM: 1941720012 <br>";
//     echo "Kelas: Web A";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID $id";
// });

// PRAKTIKUM 2 - SINGLE CONTROLLER
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// PRAKTIKUM 2 - SINGLE ACTION CONTROLLER
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolios/{portfolio}', [PortfolioController::class, 'show'])->name('portfolios.show');

Route::resource('employees', EmployeeController::class);
Route::post('employees/search', [EmployeeController::class, 'search'])->name('employees.search');

Route::get('employees/salary/{employee}', [EmployeeController::class, 'salary_report'])->name('employees.salary');

Route::resource('articles', ArticleController::class);

Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
