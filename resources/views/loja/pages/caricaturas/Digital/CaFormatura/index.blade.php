@extends('loja.layouts.app', ['title'=> 'Caricaturas de Formatura'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de Formatura', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaFormatura.components.slide')
    @include('loja.pages.caricaturas.Digital.CaFormatura.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaFormatura.components.productdescription')
    

  

@endsection