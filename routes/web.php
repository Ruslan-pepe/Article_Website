<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\showTemplateController;
use App\Http\Controllers\ArticleHendlerController;

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
if (!empty($_SERVER['REQUEST_URI'])){
  $server = $_SERVER['REQUEST_URI'];
  $server = explode('/', $server);
}

Route::get('/', 'showTemplateController@showPage')->defaults('page', 'home');
Route::get('/hub','showTemplateController@showPage')->defaults('page', 'welcome');
Route::get('/test','showTemplateController@showPage')->defaults('page', 'test');
Route::get('/hack','showTemplateController@showPage')->defaults('page', 'hack');
Route::get('/foot','showTemplateController@showPage')->defaults('page', 'footer');
Route::get('/addArticle', 'ArticleHendlerController@showTwo');
Route::post('/HandlerArticle','ArticleHendlerController@ArticleHandler');
Route::get('/articles', 'showTemplateController@handlerArticle');
if (!empty($server)){
  Route::get('/article/{id}', 'showTemplateController@viewPageandDb')->defaults('id', $server);

}


