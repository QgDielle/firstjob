<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateFormArticle extends Component
{
    public $title, $description, $price;

    public function store(){

        $article = Article::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'user_id'=>Auth::user()->id,
        ]);
        $this->reset();
        session()->flash('successMessage', 'Hai inserito correttamente inserito il tuo annuncio');
    }

    public function render()
    {
        return view('livewire.create-form-article');
    }

}
