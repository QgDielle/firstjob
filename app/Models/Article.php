<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        'title',
        'description',
        'price',
        'user_id'

    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            "id" => $this->id,
            "title" => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            "category" => $category,
        ];
        return $array;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()

    {
        return $this->belongsTo(Category::class);
    }

    public static function toBeRevisionedCount()
    {

        return Article::where('is_accepted', NULL)->count();
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;

        $this->save();
        return true;
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
