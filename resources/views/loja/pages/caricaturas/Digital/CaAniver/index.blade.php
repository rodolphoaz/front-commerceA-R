@extends('loja.layouts.app', ['title'=> 'Caricaturas de aniversário'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de aniversário', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaAniver.components.slide')
    @include('loja.pages.caricaturas.Digital.CaAniver.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaAniver.components.productdescription')
    

  

@endsection