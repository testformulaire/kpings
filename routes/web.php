<?php

use App\Http\Controllers\Article\PortfolioArticle;
use App\Http\Controllers\Portfolio\PortfolioControlleur;
use Illuminate\Support\Facades\Route;

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
  

Route::get("/", [PortfolioControlleur::class, "page_Acceuil" ]);
Route::get("/Acceuil", [PortfolioControlleur::class, "page_Acceuil" ])->name("Acceuil");
Route::get("/Apropos", [PortfolioControlleur::class, "page_Apropos" ])->name("Apropos");
Route::get("/portfolio", [PortfolioControlleur::class, "page_portfolio" ])->name("portfolio");
Route::get("/service", [PortfolioControlleur::class, "page_service" ])->name("service");
Route::get("/blog", [PortfolioControlleur::class, "page_blog" ])->name("blog");
Route::get("/contacte", [PortfolioControlleur::class, "page_contacte" ])->name("contacte");

Route::get('/article', [PortfolioArticle::class, 'index']);

Route::prefix("/portfolio")->group(function () {
    Route::resource('/article', PortfolioArticle::class);
});

// Route::get('/', function () {
//     return view('PageWeb.index');
// });
