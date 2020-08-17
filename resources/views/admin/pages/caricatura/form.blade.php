{!! Form::open()->route('caricature.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('id',null) !!}
    @endif
<div class="container">
    <div class="row">
        <div class="col-6">
            {!! Form::text('sort','Tipo')->wrapperAttrs(['class' => 'col-12']) !!}
            {!! Form::text('template' , 'Modelo')->wrapperAttrs(['class' => 'col-12']) !!}
            {!! Form::text('price', 'Preco')->wrapperAttrs(['class' => 'col-12']) !!} 
        </div>
        <div class="col-6">
            {!! Form::file('upload','Selecione as fotos')->wrapperAttrs(['class'=> 'col-12']) !!}
        </div>
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1']) !!}
    </div>
</div>
{!! Form::close() !!}