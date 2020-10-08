{!! Form::open()->route('tipo_tag.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('uuid',null) !!}
    @endif
<div class="container">
    <div class="row">
        {!! Form::text('tipo', 'Tipo')->wrapperAttrs(['class'=>'col-md-12'])!!}
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1'])!!}
    </div>
</div>
{!! Form::close() !!}