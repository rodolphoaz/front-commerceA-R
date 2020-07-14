@extends('layouts.app')
@section('content')
<style>
    #section-banner{
        margin-top: 10% !important;
        background-size: 100%;
        background-position:center;
        background-clip:padding-box;
        height: 60vh;
        background-image: url("{{ asset('img/offer-bg.png')}}");
        background-repeat:no-repeat;
    }
    #text-section {
        padding-top: 10%; 
    }
    .card-text{
        font-size:14px;
        font-size-adjust: initial
    }
    .card-title{
        font-size: 15px
    }
    h1 > i {
        margin-bottom: 12px;
    }
    #slide{
        height:60vh;
    }
    @media (min-width: 576px){

    }
</style>
    @include('pages.home.components.slide')
    @include('pages.home.components.card')
    @include('pages.home.components.offer')
    @include('pages.home.components.list-product')

@endsection