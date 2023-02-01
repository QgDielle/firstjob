<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Symfony\Component\Console\Descriptor\Descriptor;

class PublicController extends Controller
{
    public function welcome()
    {
        $articles = Article::orderBy("created_at" ,"DESC")->where('is_accepted' , true)->take(4)->get();
        return view('welcome', compact("articles"));
    }


}
