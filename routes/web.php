<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/service/{slug}', [HomeController::class, 'detailService'])->name('service.detail');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/article/{slug}', [HomeController::class, 'detailArticle'])->name('article.detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');
Route::get('/not-found', [HomeController::class, 'notFound'])->name('not-found');