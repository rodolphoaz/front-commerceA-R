@extends('loja.layouts.app', ['title'=> 'Mascotes 2d pessoas'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'mascotes 2d Pessoas', 
    'description'=> 'Mascotes 2d .'
    ])

    @include('loja.pages.caricaturas.Mascotes2d.Animais.components.slide')
    @include('loja.pages.caricaturas.Mascotes2d.Animais.components.areaproduct')
    @include('loja.pages.caricaturas.Mascotes2d.Animais.components.productdescription')
    

  

@endsection