@extends('loja.layouts.app', ['title'=>'Contato'])

@section('content')

@include('loja.layouts.components.banner', [
  'title' => 'Faça seu orçamento online.', 
  'description'=> 'Se você está sem ideia, nós envie uma mensagem que ajudaremos a dar vida ao seu projeto. Personalizamos do seu jeito!'
  ])
 
<div class="d-flex justify-content-center">
  <div class="col-8 row mb-5">  
    <div class="row col-12 mt-5">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
          {{ session('status') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
     @endif
      <div class="col-8">
        <h2 class="contact-title text-center"> Envie-nos uma mensagem </h2>
      </div>
      <div class="col-4">
        <h2  class="contact-title text-center">Contados</h2>
      </div>
    </div>
    <div class="col-lg-8 mb-2">
       
       {!! 
        Form::open()
        ->post()
        ->route('contact.store')
        ->autocomplete(false)
        ->attrs([
          'class' => 'form-contact contact_form', 
          'id' => 'conctactForm' , 
          'novalidade'=>'novalidade'
        ])
      !!}
        <div class="row mb-4">
          {!! 
            Form::text('subject',null)
              ->type('text')
              ->wrapperAttrs(['class'  => 'col-12'])
              ->placeholder('Digite seu assunto')
              ->attrs(['class' => ' form-sm' ])
            !!}

          {!! 
            Form::text('name',null)
            ->type('text')
            ->wrapperAttrs(['class' => 'col-6 '])
            ->placeholder('Digite seu nome')
            ->attrs(['class' => 'form-sm'])  
          !!}

          {!! 
            Form::text('email',null)
            ->type('email')
            ->wrapperAttrs(['class' => 'col-6'])
            ->placeholder('Digite seu Email')
            ->attrs(['class' => 'form-sm'])  
          !!}
          
          {!!
            Form::textarea('message',null)
            ->wrapperAttrs(['class' => 'col-12'])
            ->attrs(['cols' => '30', 'rows' => '9', 'class' => 'w-100'])
            ->placeholder('Descreva seu pedido')
          !!}
        </div>
        {!!
            Form::submit('Enviar Pedido')
            ->wrapperAttrs(['class' => 'mt-4 d-flex justify-content-center'])
            ->attrs(['class' => 'main_btn'])
          !!}
    
    {!! Form::close()!!}
</div>

    <div class="col-lg-4 mt-3 ">
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
          <h3>Rio de janeiro.</h3>
           <p> Aceitamos pedidos 24 horas</p>
         
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
        <div class="media-body">
          <h3><a href="tel:454545654">(21)981840572 / 974096349 </a></h3>
          <p> Atendimento de segunda à sexta 
           de 10:00 Am ate 22:00Pm</p>
          
        </div>
      </div>
      <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-email"></i></span>
        <div class="media-body">
          <h3><a href="aercaricaturasonline03@gmail.com">aercaricaturasonline03@gmail.com</a></h3>
          <p> Mande um email para gente !</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ================ contact section end ================= -->

@endsection