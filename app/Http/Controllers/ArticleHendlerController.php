<?php

namespace App\Http\Controllers;

use App\Http\Controllers\showTemplateController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleHendlerController extends Controller
{
  public function ArticleHandler(Request $request): RedirectResponse
  {
    $author = $request->input('author');
    $article = $request->input( 'article' );
    $heading = $request->input('heading');

    DB::insert('insert into articles (author,articles,heading) values (?, ?, ?)', [$author, $article,$heading]);
    return redirect('/articles');
  }
  public function showTwo(){
    $showTemlateController = ArticleHendlerController::class;
    $hendlerArticle = showTemplateController::class;

    return view('addArticle')->with(compact('showTemlateController','hendlerArticle'));
  }
}
