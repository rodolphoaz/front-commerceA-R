@extends('admin.layouts.app', ['title'=>'Adicionais'])

@section('content')
    @include('admin.pages.partials.header',
        [
            'title' => 'Cadastro de Adicionais',
            'description' => 'Cadastre seus adicionais!'
        ]
    )

    <div class="container mt-6">
        @if(session('status'))
            <div  class=" d-flex justify-content-center">
                @include('admin.pages.itens_adicionais.alert',[
                    'msg' => strtoupper(session('status'))
                ])
            </div>
        @endif
        
        @include('admin.pages.itens_adicionais.form',
        [
            'model' => $model,
            'type' => 'save'
        ])

    </div>

@endsection
