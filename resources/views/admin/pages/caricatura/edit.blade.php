@extends('admin.layouts.app', ['title' => 'create Caricatura'])

@section('content')

    @include('admin.pages.caricatura.partials.header', [
        'title' => __('Criar ') . ' '. 'Nova Caricatura',
        'description' => __('This is your profile page. You can see the progress you\'ve 
        made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ]) 
    
    <div class="container mt-4 text-center">
   
        <h1 class="title text-center col-12">{{__('Nova Caricatura')}}</h1>
        {!! Form::open()->route('caricatura.store')->autoComplete(false) !!}
            <div class="row d-flex justify-content-center" >
                {!! Form::text('tipo','Tipo')->wrapperAttrs(['class' => 'col-4']) !!}
                {!! Form::text('modelo' , 'Modelo')->wrapperAttrs(['class' => 'col-4']) !!}
                {!! Form::text('valor', 'valor')->wrapperAttrs(['class' => 'col-8']) !!}
            </div>
            <div class="row justify-content-center">
                {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1']) !!}
            </div>
        {!! Form::close() !!}
        </div>
    </div>

@endsection