<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateFormArticle extends Component
{
    public $title, $description, $price, $category;

    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);
        $category->articles()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::user()->id,
        ]);

        $this->reset();
        session()->flash('successMessage', 'Hai inserito correttamente il tuo annuncio');
    }

    protected $rules = [

        'title' => 'required|min:3|max:20',
        'description' => 'required|min:3|max:2000',
        'category' => 'required',
        'price' => 'required|numeric',
    ];

    protected $messages = [

        'title.required' => 'Inserisci un titolo',
        'title.min' => 'Il titolo che hai inserito è inferiore di 3 caratteri',
        'title.max' => 'Il titolo che hai inserito è maggiore di 20 caratteri',
        'description.required' => 'Inserisci una descrizione dell articolo',
        'description.min' => 'La descrizione che hai inserito è inferiore di 3 caratteri',
        'description.max' => 'La descrizione che hai inserito è maggiore di 2000 caratteri',
        'category.required' => 'Seleziona la categoria',
        'price.required' => 'Inserisci il prezzo',
        'price.numeric' => 'Inserisci solo la cifra',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        return view('livewire.create-form-article');
    }
}
