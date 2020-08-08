<div class="col-12 justify-content-center ">
    {!! Form::open()->route('itens-adicionais.'.$type)->fill($model)->autocomplete(false) !!}
        @if($type=='update') 
            {!! Form::hidden('id',null) !!}
        @endif
        <div class='row justify-content-center'>
            {!! Form::text('description', 'Descricao')->wrapperAttrs(['class' => 'col-5']) !!}
            {!! Form::text('price', 'Preço')->wrapperAttrs(['class' => 'col-5']) !!}
        </div>
        <div class="d-flex justify-content-center">
            {!! Form::submit('Salvar')!!}
        </div>
    {!! Form::close() !!}
</div>