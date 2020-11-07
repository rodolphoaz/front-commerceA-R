@extends('loja.layouts.app', ['title'=> 'caricaturas em Eventos'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricatura em eventos', 
    'description'=> 'Caricatura digital em eventos .'
    ])

    @include('loja.pages.caricaturas.Aovivo.Eventos.components.slide')
    @include('loja.pages.caricaturas.Aovivo.Eventos.components.areaproduct')
    @include('loja.pages.caricaturas.Aovivo.Eventos.components.productdescription')
    

  

@endsection