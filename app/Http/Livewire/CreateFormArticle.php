<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateFormArticle extends Component
{
    public $title, $description, $price, $category;

    public function store(){

        $category = Category::find($this->category);
        $category->articles()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::user()->id,
        ]);

        $this->reset();
        session()->flash('successMessage', 'Hai inserito correttamente inserito il tuo annuncio');
    }

    public function render()
    {
        return view('livewire.create-form-article');
    }

}
