@extends('pages.layout')

@section('content')
    <form action="/tag/update" method="post">
        <input type="hidden" value="{{ $tag->id }}" name="id">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $tag->title }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection()