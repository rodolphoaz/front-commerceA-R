@extends('loja.layouts.app',['title' => 'Shopp'])

@section('content')
    <br/>
   <section class="container">
            <div class='col-md-6 offset-md-3'>
                <hr/>
                <p>
                    <h2 class="text-center">Nossa Loja</h2>
                </p>
                <hr/>
            </div>
            @include('loja.pages.produto.components.item')
    </section>
@endsection