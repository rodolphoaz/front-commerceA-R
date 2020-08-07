@extends('loja.layouts.app', ['title'=> 'Canecas Temática'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Canecas com caricatura de Temática', 
    'description'=> 'Caricatura digital estampada na caneca de porcelana Branca.'
    ])

    @include('loja.pages.caricaturas.Mug.tematica.components.slide')
    @include('loja.pages.caricaturas.Mug.tematica.components.areaproduct')
    @include('loja.pages.caricaturas.Mug.tematica.components.productdescription')
    

  

@endsection