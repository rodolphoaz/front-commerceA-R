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
    @if (session('status'))
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
                
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification"></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    
                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4"></h4>
                        <p>{{ strtoupper(session('status')) }}</p>
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                </div>
                
            </div>
            @endif
@endsection