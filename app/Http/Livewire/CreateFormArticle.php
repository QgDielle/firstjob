<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateFormArticle extends Component
{
    use WithFileUploads;

    public $article;

    public $images = [];

    public $title, $description, $price, $category, $temporary_images;

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image|max:1024',])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();

        $this->article = Category::find($this->category)->articles()->create(
            [
                'title' => $this->title,
                'description' => $this->description,
                'price' => $this->price,
                'user_id' => Auth::user()->id,
            ]
        );

        if (count($this->images)) {
            foreach ($this->images as $image) {
                // $this->article->images()->create(['path'=>$image->store('images','public')]);
                $newFileName = "article/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 450),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $this->reset();
        session()->flash('successMessage', 'Hai inserito correttamente il tuo annuncio, sarà pubblicato dopo la revisione');
    }

    protected $rules = [

        'title' => 'required|min:3|max:20',
        'description' => 'required|min:3|max:2000',
        'category' => 'required',
        'price' => 'required|numeric',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
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
        'images.*.max' => "L'immagine dev'essere massimo di 1Mb",
        'temporary_images.*.max' => "L'immagine dev'essere massimo di 1Mb",


    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function render()
    {
        $categoryName = Category::find($this->category);
        return view('livewire.create-form-article', compact("categoryName"));
    }
}
