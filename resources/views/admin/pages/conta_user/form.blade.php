{!! Form::open()->route('conta_user.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('id',null) !!}
    @endif
<div class="container">
    <div class="row">
     {!! Form::fieldsetopen('Contato') !!}
        {!! Form::text("tipo","Tipo de contato") !!}
     {!! Form::fieldsetclose() !!}
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1']) !!}
    </div>
</div>
{!! Form::close() !!}