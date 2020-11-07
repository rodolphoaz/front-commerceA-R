@extends('loja.layouts.app', ['title'=> 'Caricaturas infantil'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de Infantil', 
    'description'=> 'Caricatura digital kidis .'
    ])

    @include('loja.pages.caricaturas.Digital.CaInfantil.components.slide')
    @include('loja.pages.caricaturas.Digital.CaInfantil.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaInfantil.components.productdescription')
    

  

@endsection