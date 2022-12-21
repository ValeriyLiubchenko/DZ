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

    <a href="/category/create" class="btn btn-success">CREATE category</a>
    @if(!empty($categories))
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
            @foreach($categories as $category)
                <tr>
                    <th>{{$category->id}}</th>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td>
                        <a href="/category/{{$category->id}}/edit"> Update </a>
                        <a href="/category/{{$category->id}}/delete"> Delete </a>
                        <a href="/category/{{$category->id}}/show"> Show </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @else
                <p> Empty !</p>
            @endif
        </table>

        @endsection