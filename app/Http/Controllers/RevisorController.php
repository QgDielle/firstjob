<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){

        $article_to_check = Article::where('is_accepted', NULL)->first();
        
        return view('revisor.index', compact('article_to_check'));
    }

    public function revisor_accept(Article $article){

        $article->setAccepted(true);

        return redirect()->back()->with('successMessage' , "Hai accettato l'articolo");

    }

    public function revisor_decline(Article $article){

        $article->setAccepted(false);

        return redirect()->back()->with('successMessage' , "Hai rifiutato l'articolo");

    }

}
