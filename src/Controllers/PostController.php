<?php

namespace Hillel\Controllers;

use Hillel\Models\Category;
use Hillel\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController
{

    public function index()
    {
        $posts = Post::all();
        return view('pages/categories/list-categories', compact('posts'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('pages/categories/show', compact('category'));
    }

    public function create()
    {
        // dd($_SESSION['errors']);
        $category = new Category();
        return view('pages/categories/create-category',compact('category'));

    }

    public function store()
    {

        $data = request()->all();

        $validator = validator()->make($data,[
            'title'=>['required','min:3'],
            'slug'=>['required','min:3'],
            'category_id'=>['exists:categories,id ']
        ]);
        if ($validator->fails())
        {
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