@extends('loja.layouts.app', ['title'=> 'Caricaturas de Noivos'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de Noivos', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaNoivos.components.slide')
    @include('loja.pages.caricaturas.Digital.CaNoivos.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaNoivos.components.productdescription')
    

  

@endsection