@extends('pages.layout')


@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{$_SESSION['success']}}
        </div>
        @php
            unset($_SESSION['success']);
        @endphp
    @endisset
    <a href="/tag/trash" class="btn btn-info">Trash</a>
    @if(!empty($tags))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <th>{{$tag->id}}</th>
                    <td>{{$tag->title}}</td>
                    <td>{{$tag->slug}}</td>
                    <td>{{$tag->created_at}}</td>
                    <td>{{$tag->updated_at}}</td>
                    <td>
                        <a href="/tag/{{$tag->id}}/restore"> restore </a>
                        <a href="/tag/{{$tag->id}}/force-delete"> Delete </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @else
                <p> Empty !</p>
            @endif
        </table>

        @endsection