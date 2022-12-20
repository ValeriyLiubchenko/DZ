@extends('pages.layout')
@section('content')
    <form action="/category/store" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/categories/list-categories.php',
'name'=>'Categories list',
        ],[
'link'=>'/tags/list-tags.php',
'name'=>'Tags list',
        ]
    ]
])
@endsection