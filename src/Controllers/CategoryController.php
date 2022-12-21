<?php

namespace Hillel\Controllers;

use Hillel\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController
{

    public function index()
    {
        $categories = Category::all();
        return view('pages/categories/list-categories', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('pages/categories/show', compact('category'));
    }

    public function create()
    {
        $category = new Category();
        return view('pages/categories/create-category');

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
        return view('pages/categories/update-category', compact('category'));
    }

    public function update()
    {
        $request = request();
        $category = Category::find($request->input('id'));
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return new RedirectResponse('/category');
    }

    public function destroy($id)
    {
        $request = request();
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/category');
    }
}