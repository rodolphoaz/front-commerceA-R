@extends('layouts.app')
@section('content')
    <div class='my-5'>
        {!! Form::open()->post()->route('product') !!}
        {!! Form::close()!!}
    </div>
@endsection