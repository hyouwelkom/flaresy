@extends('layout')

@section('content')
    <div class="section pt-lg-5">
        <h2 class="flaresy-title">NOS PRODUCTIONS</h2>

        <div class="custom-underlines">
            <div class="line"></div>
            <div class="box"></div>
            <div class="line"></div>
        </div>

        <div id="categories" class="mb-lg-5">
            <a class="btn btn-lg btn-flaresy-bis active" href="javascript:void(0)" onclick="filtrerCategories('all', this)">
                Tout
            </a>
            <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategories('animation', this)">
                Animation 2D | 3D
            </a>
            <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategories('drone', this)">
                Vidéos drone | 360°
            </a>
            <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategories('marketing', this)">
                Vidéos marketing
            </a>
            <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategories('spots', this)">
                Spots
            </a>
            <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategories('evenementiels', this)">
                Films évènementiels
            </a>
        </div>

        <div id="productions-prod">

            <div class="production-prod animation">
                <div class="production-layer">
                    <div class="production-prod-img-container">
                        <img src="{{ asset('storage/photos/slider1.jpg') }}">
                        <p class="production-prod-txt">Animation 3D</p>
                    </div>
                </div>
            </div>

            <div class="production-prod drone">
                <div class="production-layer">
                    <div class="production-prod-img-container">
                        <img src="{{ asset('storage/photos/slider1.jpg') }}">
                        <p class="production-prod-txt">Animation 3D</p>
                    </div>
                </div>
            </div>

            <div class="production-prod marketing">
                <div class="production-layer">
                    <div class="production-prod-img-container">
                        <img src="{{ asset('storage/photos/slider1.jpg') }}">
                        <p class="production-prod-txt">Animation 3D</p>
                    </div>
                </div>
            </div>

            <div class="production-prod marketing">
                <div class="production-layer">
                    <div class="production-prod-img-container">
                        <img src="{{ asset('storage/photos/slider1.jpg') }}">
                        <p class="production-prod-txt">Animation 3D</p>
                    </div>
                </div>
            </div>

            <div class="production-prod marketing">
                <div class="production-layer">
                    <div class="production-prod-img-container">
                        <img src="{{ asset('storage/photos/slider1.jpg') }}">
                        <p class="production-prod-txt">Animation 3D</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
