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
        return view('app.categories.show', [
            'category' => $category,
        ]);
    }

}
