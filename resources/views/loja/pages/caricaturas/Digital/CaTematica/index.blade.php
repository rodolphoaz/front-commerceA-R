@extends('loja.layouts.app', ['title'=> 'Caricaturas de Temáticas'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de Temáticas', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaTematica.components.slide')
    @include('loja.pages.caricaturas.Digital.CaTematica.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaTematica.components.productdescription')
    

  

@endsection