@extends('loja.layouts.app', ['title'=> 'mascote 2d veiculos'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'mascote 2d', 
    'description'=> 'mascote 2d - veiculos .'
    ])

    @include('loja.pages.caricaturas.Mascotes2d.Veiculos.components.slide')
    @include('loja.pages.caricaturas.Mascotes2d.veiculos.components.areaproduct')
    @include('loja.pages.caricaturas.Mascotes2d.veiculos.components.productdescription')
    

  

@endsection