<div class="col-12 container">
    {!! Form::open()->route('item_type.'.$type)->fill($model)->autocomplete(false) !!}
        @if($type=='update') 
            {!! Form::hidden('id',null) !!}
        @endif
        <div class="offset-3">
            {!! Form::text('description', 'Descricao')->wrapperAttrs(['class' => 'col-7']) !!}
            {!! Form::text('price', 'Preço')->wrapperAttrs(['class' => 'col-7']) !!}
            <div class="col-7 offset-3">
                {!! Form::submit('Salvar') !!}
            </div>
        </div>
    {!! Form::close() !!}
</div>