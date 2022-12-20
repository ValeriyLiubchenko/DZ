<?php

namespace Hillel\Controllers;

use Hillel\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController
{

    public function index()
    {
        $title = 'list-categories';
        $categories = Category::all();
        return view('pages/categories/list-categories', compact('title', 'categories'));
    }

    public function show()
    {

    }

    public function create()
    {
        $category = new Category();
        return view('pages/categories/create-category', [
            'title' => 'create-category'
        ]);

    }

    public function store()
    {
        $request = request();
        $category = new Category();
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return new RedirectResponse('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('pages/categories/create-category', [
            'title' => 'create-category'
        ]);
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}