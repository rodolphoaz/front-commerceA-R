@extends('admin.layouts.app', ['title'=>'Adicionais'])

@section('content')
    @include('admin.pages.partials.header',
        [
            'title' => 'Cadastro de Adicionais',
            'description' => 'Cadastre seus adicionais!'
        ]
    )
       
    <div class="container mt-3">
        <h1 class="text-center">Novo Adicional</h1>
        @if(session('status'))
            <div  class=" d-flex justify-content-center">
                @include('admin.pages.item_type.alert',[
                    'msg' => strtoupper(session('status'))
                ])
            </div>
        @endif
      @include('admin.pages.item_type.form',
        [
            'model' => null,
            'type' => 'save'
        ])

    </div>

@endsection
