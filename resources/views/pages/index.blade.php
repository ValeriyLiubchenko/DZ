@extends('pages.layout')


@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/categories/list-categories.php',
'name'=>'Categories list',
        ],[
'link'=>'/tags/list-tags.php',
'name'=>'Tags list',
        ]
    ]
])
@endsection

@section('content')
@endsection