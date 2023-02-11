<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Laravel\Scout\Searchable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'searchArticle');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy("created_at", "DESC")->where('is_accepted', true)->paginate(8);
        return view("article.index", compact("articles"));
    }

    public function searchArticle(Request $request)
    {
        $articles = Article::search($request->searched)->where("is_accepted", true)->paginate(10);
        return view("article.index", compact("articles"));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function article_profile($user_id)
    {
        if (Auth::user()->id != $user_id) {
            return redirect(route("welcome"))->with("errorMessage", "Non sei il propietario");
        }
        $articles = Article::where('user_id', "=", $user_id)->where('is_accepted', true)->get();
        return view("article.profile", compact("articles"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("article.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->images()->delete();
        $article->delete();
        return redirect(route("welcome"))->with("successMessage", "Articolo eleminato");
    }
}
