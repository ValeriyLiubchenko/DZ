@extends('pages.layout')

@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/',
'name'=>'Home',
        ],[
'link'=>'/tag',
'name'=>'Tags list',
        ]
    ]
])
@endsection

@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            {{$_SESSION['success']}}
        </div>
        @php
            unset($_SESSION['success']);
        @endphp
    @endisset

    <a href="/tag/create" class="btn btn-success">CREATE tag</a>
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
                        <a href="/tag/{{$tag->id}}/edit"> Update </a>
                        <a href="/tag/{{$tag->id}}/delete"> Delete </a>
                        <a href="/tag/{{$tag->id}}/show"> Show </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @else
                <p> Empty !</p>
            @endif
        </table>

        @endsection