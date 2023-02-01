<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\RevisorRequestMail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function revisor_request(){
        $mail = Auth::user()->email;
        Mail::to($mail)->send(new RevisorRequestMail(Auth::user()));

        return redirect()->back()->with('successMessage' , 'Hai inviato correttamente la richiesta');
    }

    public function revisor_make(User $user){
        Artisan::call('presto:makeUserRevisor' , ['email' => $user->email]);

        return redirect('/')->with('successMessage' , 'Complimenti sei diventato un revisore!');
    }


}
