@extends('loja.layouts.app', ['title'=> 'Caricaturas de Individual'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas Individual', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaIndividual.components.slide')
    @include('loja.pages.caricaturas.Digital.CaIndividual.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaIndividual.components.productdescription')
    

  

@endsection