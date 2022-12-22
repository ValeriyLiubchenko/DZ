@extends('pages.layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <ul>
        <li>
            Slug: {{ $post->slug }}
            Category: {{ $post->category->title }}
            Tags: {{ $post->tags->pluck('title')->join(', ') }}
            created: {{ $post->created_at }}
            updated: {{ $post->updated_at }}
        </li>
    </ul>
@endsection()