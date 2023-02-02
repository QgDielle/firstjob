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
    public function __construct()
    {
        $this->middleware('isRevisor')->except("revisor_contactus", "revisor_submit", "revisor_make");
        $this->middleware('auth');
    }

    public function index()
    {

        $article_to_check = Article::where('is_accepted', NULL)->first();

        return view('revisor.index', compact('article_to_check'));
    }

    public function revisor_accept(Article $article)
    {

        $article->setAccepted(true);

        return redirect()->back()->with('successMessage', "Hai accettato l'articolo");
    }

    public function revisor_decline(Article $article)
    {

        $article->setAccepted(false);

        return redirect()->back()->with('successMessage', "Hai rifiutato l'articolo");
    }

    public function revisor_recap()
    {
        $articles_recap = Article::all()->where('is_accepted', !NULL);

        return view('revisor.recap', compact('articles_recap'));
    }

    // public function revisor_request()
    // {
    //     $mail = Auth::user()->email;
    //     Mail::to($mail)->send(new RevisorRequestMail(Auth::user()));

    //     return redirect()->back()->with('successMessage', 'Hai inviato correttamente la richiesta');
    // }

    public function revisor_make(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ['email' => $user->email]);

        return redirect('/')->with('successMessage', 'Complimenti sei diventato un revisore!');
    }

    public function revisor_contactus()
    {
        return view('revisor.contact-us');
    }

    public function revisor_submit(Request $request)
    {
        $mail = Auth::user()->email;
        $user_message = $request->message;
        Mail::to($mail)->send(new RevisorRequestMail(Auth::user(), $user_message));
        return redirect(route('welcome'));
    }
}
