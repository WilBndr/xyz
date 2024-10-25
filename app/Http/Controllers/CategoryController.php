<?php

namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController
{

    public function index()
    {
        $categories = Category::all();

        return view('app.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(Category $category)
    {

        $tracks = $category->tracks()->withCount('likes')->orderBy('likes_count', 'desc')->paginate(10);

        return view('app.categories.show', [
            'category' => $category,
            'tracks' => $tracks,
        ]);
    }

}
