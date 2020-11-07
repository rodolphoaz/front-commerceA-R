@extends('loja.layouts.app', ['title'=> 'Mascotes 2d - Animais'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'Mascotes 2d - Animais', 
    'description'=> 'Mascotes 2d.'
    ])

    @include('loja.pages.caricaturas.Mascotes2d.Animais.components.slide')
    @include('loja.pages.caricaturas.Mascotes2d.Animais.components.areaproduct')
    @include('loja.pages.caricaturas.Mascotes2d.Animais.components.productdescription')
    

  

@endsection