@extends('loja.layouts.app', ['title'=> 'Canecas Individuais'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Canecas com caricatura individual', 
    'description'=> 'Caricatura digital estampada na caneca de porcelana Branca.'
    ])
    @include('loja.pages.caricaturas.Mug.individual.components.slide')
    @include('loja.pages.caricaturas.Mug.individual.components.areaproduct')
    @include('loja.pages.caricaturas.Mug.individual.components.productdescription')
    


  

@endsection