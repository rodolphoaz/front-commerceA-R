@extends('loja.layouts.app',['title' => 'Caricaturas Temáticas'])

@section('content')
    <br/>
   <section class="container">
            <div class='col-md-6 offset-md-3'>
                <hr/>
                <p>
                    <h2 class="text-center">Caricaturas Temáticas</h2>
                </p>
                <hr/>
            </div>
            @include('loja.pages.Tematicas_Digital.components.item')
    </section>
@endsection