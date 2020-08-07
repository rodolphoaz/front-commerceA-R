@extends('loja.layouts.app', ['title'=> 'Canecas Casal'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Canecas com caricatura de Casal', 
    'description'=> 'Caricatura digital estampada na caneca de porcelana Branca.'
    ])

    @include('loja.pages.caricaturas.Mug.Casal.components.slide')
    @include('loja.pages.caricaturas.Mug.Casal.components.areaproduct')
    @include('loja.pages.caricaturas.Mug.Casal.components.productdescription')
    

  

@endsection