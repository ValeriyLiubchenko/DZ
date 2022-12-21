@extends('pages.layout')

@section('content')
    <h1>{{ $category->title }}</h1>
    <ul>
        <li>
            Slug: {{ $category->slug }}
            created: {{ $category->created_at }}
            update: {{ $category->update_at }}
        </li>
    </ul>
@endsection()
