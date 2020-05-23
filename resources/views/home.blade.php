@extends('layout')

@section('content')
    <div class="slider">
        @include('partials.slider')
    </div>
    <div class="section pt-lg-5">
        @include('partials.nos-services')
    </div>
    <div class="section pt-lg-5 bg-gray">
        @include('partials.nos-prods')
    </div>
    <div class="section pt-lg-5">
        @include('partials.l-equipe')
    </div>
    <div class="section pt-lg-5">
        @include('partials.contact')
    </div>
@endsection
