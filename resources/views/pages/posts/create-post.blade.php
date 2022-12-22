@extends('pages.layout')
@section('content')
    <form action="/post/store" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$_SESSION['data']['title']??''}}">


            @isset($_SESSION['errors']['title'])
                @foreach($_SESSION['errors']['title'] as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset

        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{$_SESSION['data']['slug']??''}}">

            @isset($_SESSION['errors']['slug'])
                @foreach($_SESSION['errors']['slug'] as $error)
                    <div class=" alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset

        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" class="form-control" id="body" name="body" value="{{$_SESSION['data']['body']??''}}">

            @isset($_SESSION['errors']['body'])
                @foreach($_SESSION['errors']['body'] as $error)
                    <div class=" alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endisset

        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @isset($_SESSION['errors']['category_id'])
                @foreach($_SESSION['errors']['category_id'] as $error)
                    <div class=" alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach

            @endisset
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select name="tags[]" id="tags" multiple>
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
            @isset($_SESSION['errors']['category_id'])
                @foreach($_SESSION['errors']['category_id'] as $error)
                    <div class=" alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach

            @endisset
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp

@endsection


@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/category',
'name'=>'Categories list',
        ],[
'link'=>'/tag',
'name'=>'Tags list',
        ]
    ]
])
@endsection