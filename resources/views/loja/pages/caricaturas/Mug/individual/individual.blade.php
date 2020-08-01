@extends('loja.layouts.app', ['title'=> 'Individual'])
@section('content')

    @include('loja.layouts.components.banner', [
    'title' => 'canecas com caricatura individual', 
    'description'=> 'Mug.'
    ])

    @include('loja.pages.caricaturas.Mug.components.individual')

@endsection