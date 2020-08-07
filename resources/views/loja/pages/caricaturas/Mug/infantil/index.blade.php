@extends('loja.layouts.app', ['title'=> 'Canecas Infantil'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Canecas com caricatura Infantil', 
    'description'=> 'Caricatura digital estampada na caneca de porcelana Branca.'
    ])

    @include('loja.pages.caricaturas.Mug.infantil.components.slide')
    @include('loja.pages.caricaturas.Mug.infantil.components.areaproduct')
    @include('loja.pages.caricaturas.Mug.infantil.components.productdescription')
    

  

@endsection