@extends('pages.layout')

@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{ $_SESSION['success'] }}
        </div>
    @endisset
    @php
        unset($_SESSION['success']);
    @endphp
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Category</th>
            <th scope="col">Tag</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->category->title }}</td>
                <td>{{ $post->tags->pluck('title')->join(', ') }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->udpdated_at }}</td>
                <td>
                    <a href="/post/{{ $post->id }}/restore">Restore</a>
                    <a href="/post/{{ $post->id }}/force-delete">Delete</a>
                </td>
            </tr>
        @empty
            <p>Empty</p>
        @endforelse
        </tbody>
    </table>
@endsection()