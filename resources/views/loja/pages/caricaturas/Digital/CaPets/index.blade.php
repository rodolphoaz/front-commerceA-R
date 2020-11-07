@extends('loja.layouts.app', ['title'=> 'Caricaturas de Pets'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de Pets', 
    'description'=> 'Caricatura digital dos seus bichinhos .'
    ])

    @include('loja.pages.caricaturas.Digital.CaPets.components.slide')
    @include('loja.pages.caricaturas.Digital.CaPets.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaPets.components.productdescription')
    

  

@endsection