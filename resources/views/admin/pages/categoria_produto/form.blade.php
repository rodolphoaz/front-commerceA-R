{!! Form::open()->route('categoria_produto.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('id',null) !!}
    @endif
<div class="container">
    <div class="row">
        <div class="col-6">
          
        </div>
        <div class="col-6">
         
        </div>
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1']) !!}
    </div>
</div>
{!! Form::close() !!}