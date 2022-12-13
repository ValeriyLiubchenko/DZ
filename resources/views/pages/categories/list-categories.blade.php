@extends('pages.layout')

@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/',
'name'=>'Home',
        ],[
'link'=>'/tags/list-tags.php',
'name'=>'Tags list',
        ]
    ]
])
@endsection

@section('content')
    <a href="/categories/create-category.php" class="btn btn-success">CREATE category</a>
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
                        <a href="/categories/update-category.php?id={{$category->id}}"> Update </a>
                        <a href="/categories/delete-category.php?id={{$category->id}}"> Delete </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @else
                <p> Empty !</p>
            @endif
        </table>

        @endsection