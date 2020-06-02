@extends('layout')

@section('content')
{{--    <div class="slider">--}}
{{--        @include('partials.slider')--}}
{{--    </div>--}}
    <div class="slider">
        <video controls>

            <source src="/teaser/teaser.mp4"
                    type="video/mp4">

            Votre navigateur ne supporte pas les vidéos.
        </video>
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
