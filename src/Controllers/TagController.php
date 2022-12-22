<?php

namespace Hillel\Controllers;

use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class TagController
{

    public function index()
    {
        $tags = Tag::all();
        return view('pages/tags/list-tags', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('pages/tags/show', compact('tag'));
    }

    public function create()
    {
        $tag = new Tag();
        $posts = Post::all();
        return view('pages/tags/create-tag', compact('tag','posts'));

    }

    public function store()
    {

        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => ['required', 'min:3', 'unique:tags,title'],
            'slug' => ['required', 'min:3'],
        ]);
        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $tag = new Tag();
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        $_SESSION['success'] = 'Запис успішно створено';
        return new RedirectResponse('/tag');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('pages/tags/form-edit', compact('tag'));
    }

    public function update()
    {

        $data = request()->all();
        $tag = Tag::find($data['id']);
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:3',
                Rule::unique('tags','title')->ignore($tag->id)
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

        $tag->save();
        $_SESSION['success'] = 'Запис успішно оновлено';
        return new RedirectResponse('/tag');
    }

    public function destroy($id)
    {
        $request = request();
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tag');
    }
}