@extends('admin.layouts.app',['title'=>'Vinculacao'])
@section('content')
@include('admin.pages.partials.header', [
        'title' => __('Vincular Categoria e SubCategoria'),
        'description' => __('This is your profile page. You can see the progress you\'ve 
        made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-10'
    ])

    <div class="container mt-4">
        @include('admin.pages.produto_digital.form',[
            'model'=> null, 
            'type' => 'save',
            'subcategoria' => [''=>'none'],
            'categoria' => [''=>'none']
        ]);
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