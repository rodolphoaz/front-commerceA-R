@extends('loja.layouts.app', ['title'=> 'caricaturas com grupos de pessoas '])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricatura grupos de pessoa', 
    'description'=> 'Caricatura digital de grupo .'
    ])

    @include('loja.pages.caricaturas.Aovivo.Grupos.components.slide')
    @include('loja.pages.caricaturas.Aovivo.Grupos.components.areaproduct')
    @include('loja.pages.caricaturas.Aovivo.Grupos.components.productdescription')
    

  

@endsection