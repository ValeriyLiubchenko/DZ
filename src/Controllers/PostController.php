<?php

namespace Hillel\Controllers;

use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;
use Illuminate\Http\RedirectResponse;

class PostController
{

    public function index()
    {
        $posts = Post::all();
        return view('pages/posts/list-posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('pages/posts/show', compact('post'));
    }

    public function create()
    {
        $post = new Post();
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages/posts/create-post', compact('categories', 'tags', 'post'));

    }

    public function store()
    {

        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3'],
            'body' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
            'tags' => ['required', 'exists:tags,id'],
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $post = new Post();
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->save();
        $post->tags()->attach($data['tags']);

        $_SESSION['success'] = 'Запис успішно створено';
        return new RedirectResponse('/post');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages/posts/form-edit', compact('post', 'categories', 'tags'));
    }

    public function update()
    {
        $data = request()->all();

        $post = Post::find($data['id']);
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];


        $validator = validator()->make($data, [
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3'],
            'body' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
            'tags' => ['required', 'exists:tags,id']
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $post->save();
        $post->tags()->sync($data['tags']);
        $_SESSION['success'] = 'Запис успішно оновлено';
        return new RedirectResponse('/post');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();
        return new RedirectResponse('/post');
    }
}