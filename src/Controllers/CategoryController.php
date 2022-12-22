<?php

namespace Hillel\Controllers;

use Hillel\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class CategoryController
{

    public function index()
    {
        $categories = Category::all();
        return view('pages/categories/list-categories', compact('categories'));
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('pages/categories/trash', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('pages/categories/show', compact('category'));
    }

    public function restore($id)
    {

        $request = request();
        $category = Category::withTrashed($id)
            ->where('id', $id)
            ->restore();
        return new RedirectResponse('/category');
    }

    public function create()
    {
        $category = new Category();
        return view('pages/categories/create-category', compact('category'));

    }

    public function store()
    {

        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:3', 'unique:categories,title'],
            'slug' => ['required', 'min:3']
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        $_SESSION['success'] = 'Запис успішно створено';
        return new RedirectResponse('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('pages/categories/form-edit', compact('category'));
    }

    public function update()
    {

        $data = request()->all();
        $category = Category::find($data['id']);
        $category->title = $data['title'];
        $category->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:3',
                Rule::unique('categories', 'title')->ignore($category->id)
            ],
            'slug' => [
                'required',
                'min:3']
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $category->save();

        $_SESSION['success'] = 'Запис успішно оновлено';
        return new RedirectResponse('/category');
    }

    public function destroy($id)
    {
        $request = request();
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/category');
    }
    public function forceDelete($id)
    {
        $category = Category::withTrashed($id)
            ->where('id', $id)
            ->forceDelete();
        return new RedirectResponse('/tag');
    }

}