{!! Form::open()->route('sub_categoria_produto.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('uuid',null) !!}
    @endif
<div class="container">
    <div class="row">
        {!! Form::fieldsetopen('Cadastro de subcategoria') !!}
            {!! Form::select('uuid' , 'Categoria', $categoria ) !!}
            {!! Form::text('sub_categoria_produto', 'Sub Categoria Produto')!!}
        {!! Form::fieldsetclose() !!}
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1']) !!}
    </div>
</div>
{!! Form::close() !!}