@extends('pages.layout')

@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/',
'name'=>'Home',
        ],[
'link'=>'/categories/list-categories.php',
'name'=>'Categories list',
        ]
    ]
])
@endsection

@section('content')
    <a href="/tags/create-tag.php" class="btn btn-success">CREATE TAG</a>
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
                        <a href="/tags/update-tag.php?id={{$tag->id}}"> Update </a>
                        <a href="/tags/delete-tag.php?id={{$tag->id}}"> Delete </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @else
                <p> Empty !</p>
            @endif
        </table>

        @endsection