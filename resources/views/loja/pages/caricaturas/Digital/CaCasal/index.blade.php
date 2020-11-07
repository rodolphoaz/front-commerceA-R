@extends('loja.layouts.app', ['title'=> 'Caricaturas de Casal'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de casal', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaCasal.components.slide')
    @include('loja.pages.caricaturas.Digital.CaCasal.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaCasal.components.productdescription')
    

  

@endsection