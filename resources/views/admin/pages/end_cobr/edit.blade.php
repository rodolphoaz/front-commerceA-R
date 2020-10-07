@extends('admin.layouts.app', ['title' => 'create conta_user'])

@section('content')

    @include('admin.pages.partials.header', [
        'title' => __('Criar ') . ' '. 'Nova Caricatura',
        'description' => __('This is your profile page. You can see the progress you\'ve 
        made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ]) 
    
    <div class="container mt-4 text-center">
   
        <h1 class="title text-center col-12">{{__('Nova Caricatura')}}</h1>
        @include('admin.pages.end_cobr.form', ['type' => 'update' , 'model' => $model])
        </div>
    </div>

@endsection