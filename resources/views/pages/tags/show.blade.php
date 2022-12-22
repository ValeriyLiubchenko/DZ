@extends('pages.layout')

@section('content')
    <h1>{{ $tag->title }}</h1>
    <ul>
        <li>
            Slug: {{ $tag->slug }}
            created: {{ $tag->created_at }}
            updated: {{ $tag->updated_at }}
        </li>
    </ul>
@endsection()