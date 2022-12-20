@extends('pages.layout')

@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/',
'name'=>'Home',
        ],[
'link'=>'/category',
'name'=>'Categories list',
        ]
    ]
])
@endsection

@section('content')
    <a href="/tag/create" class="btn btn-success">CREATE TAG</a>
    @if(!empty($tags))
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{$tag->id}}</th>
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