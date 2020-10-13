{!! Form::open()->route('produto_digital.'.$type)->fill($model)->autocomplete(false) !!}
       <div class="col-md-6 offset-md-3">
           {!! Form::select('categoria','Categoria',$categoria)!!}
           {!! Form::select('subcategoria','Sub Categoria' , $subcategoria) !!}
           {!! Form::submit('Gravar') !!}
       </div>
{!! Form::close() !!}