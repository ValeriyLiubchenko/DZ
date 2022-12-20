@extends('pages.layout')


@section('breadcrumbs')
    @include('particial.breadcrumbs',[
    'links'=>[
        [
'link'=>'/category',
'name'=>'Categories list',
        ],[
'link'=>'/tag',
'name'=>'Tags list',
        ]
    ]
])
@endsection

@section('content')
@endsection