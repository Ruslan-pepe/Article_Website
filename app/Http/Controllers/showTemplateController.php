<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class showTemplateController extends Controller
{
  public function showPage($page)
  {
    return view($page);
  }

  public function viewPageandDb($id)
  {
    $articles = DB::table('articles')->get();
    $articles = $articles[$id];
    $key = ['1'];

    return view('article', ['articles' => $articles]);
  }
  public function handlerArticle()
  {
    $articles = DB::table('articles')->get();

    return view('articles', compact('articles'));
  }
}
