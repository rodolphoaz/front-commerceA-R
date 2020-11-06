@extends('loja.layouts.app', ['title'=> 'caricaturas de  Casal'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricatura de Casal', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Mug.Casal.components.slide')
    @include('loja.pages.caricaturas.Mug.Casal.components.areaproduct')
    @include('loja.pages.caricaturas.Mug.Casal.components.productdescription')
    

  

@endsection