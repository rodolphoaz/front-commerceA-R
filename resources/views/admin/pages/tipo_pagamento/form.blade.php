{!! Form::open()->route('tipo_pagamento.'.$type)->fill($model)->autoComplete(false) !!}
    @if($type=='update') 
        {!! Form::hidden('uuid',null) !!}
    @endif
<div class="container">
    <div class="row">
        {!! Form::text('descricao' , 'Descricao')->wrapperAttrs('class'=>'col-md-6') !!}
        @if($type=='update')
           {!! Form::select('status', 'Status',[1 => true, 2 => false ])->wrapperAttrs(['class' => 'col-md-6']) !!} 
        @endif
    </div>
    <div class="row justify-content-center">
        {!! Form::submit("Salvar")->attrs(['class' => 'btn btn-primary col-1']) !!}
    </div>
</div>
{!! Form::close() !!}