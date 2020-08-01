@extends('loja.layouts.app', ['title'=> 'Individual'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Estúdio A&R', 
    'description'=> 'caneca.'
    ])

    @include('loja.pages.caricaturas.Mug.components.individual')

@endsection