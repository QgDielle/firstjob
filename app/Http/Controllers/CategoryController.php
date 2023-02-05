<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $articles = Article::search($category->id)->where("is_accepted", true)->paginate(8);
        return view("category.index", compact("category", "articles"));
    }
}
