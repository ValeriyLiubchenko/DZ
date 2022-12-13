@extends('pages.layout')
@section('content')
    <form method="POST">
        <input type="hidden" value="{{$tag->id}}" name="id">
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
