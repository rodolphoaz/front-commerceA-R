@extends('loja.layouts.app', ['title'=> 'Estúdio A&R'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Estúdio A&R', 
    'description'=> 'Conheça a nossa história.'
    ])

    @include('loja.pages.sobre.components.about')

@endsection