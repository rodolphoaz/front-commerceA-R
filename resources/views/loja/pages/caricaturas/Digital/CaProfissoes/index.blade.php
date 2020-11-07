@extends('loja.layouts.app', ['title'=> 'Caricaturas de Profissões'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Caricaturas de Profissões', 
    'description'=> 'Caricatura digital .'
    ])

    @include('loja.pages.caricaturas.Digital.CaProfissoes.components.slide')
    @include('loja.pages.caricaturas.Digital.CaProfissoes.components.areaproduct')
    @include('loja.pages.caricaturas.Digital.CaProfissoes.components.productdescription')
    

  

@endsection