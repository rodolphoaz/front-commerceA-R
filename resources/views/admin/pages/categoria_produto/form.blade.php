{!! Form::open()->route('categoria_produto.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('uuid',null) !!}
    @endif
<div class="container">
    <div class="row">
        {!! Form::fieldsetopen('Caricatura') !!}
            <div class="col-6">
               {!! Form::text('descricao' , 'Descricao') !!}
            </div>
        {!!Form::fieldsetclose()!!}
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Gravar")->attrs(['class' => 'btn btn-primary col-1']) !!}
    </div>
</div>
{!! Form::close() !!}