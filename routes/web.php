<?php

use App\Http\Controllers\publicController\Wrongcode;
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

Route::get('/',[Wrongcode::class,'index'])->name('root');
Route::get('/about',[Wrongcode::class,'about'])->name('about');
Route::get('/contact',[Wrongcode::class,'contact'])->name('contact');
Route::get('/service',[Wrongcode::class,'service'])->name('service');
Route::get('/team',[Wrongcode::class,'team'])->name('team');
Route::get('/project',[Wrongcode::class,'project'])->name('project');
Route::get('/testimonial',[Wrongcode::class,'testimonial'])->name('testimonial');
Route::post('/contact_submit',[Wrongcode::class,'contuct_data'])->name('contact_submit');
