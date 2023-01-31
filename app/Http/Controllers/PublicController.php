<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $articles = Article::take(4)->get()->sortByDesc("created_at");
        return view('welcome', compact("articles"));
    }
}
