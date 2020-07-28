@extends('layouts.app')
@section('content')
    <div class='my-5'>
        {!! Form::open()->post()->route('Individual_lapis') !!}
        {!! Form::close()!!}
    </div>
@endsection