@extends('layout')

@section('content')
    <div class="section pt-lg-5">
        @include('flash-message')

        <div id="fiche-contact">
            <div class="row">
                <div class="col-7 pr-0">
                    <div id="map">
                    </div>
                    <div id="marker-gmap">
                        Agence Flaresy<br>
                        IUT MMI Toulon
                    </div>
                </div>

                <div class="col" id="fiche-contact-bg">
                    <h2 class="flaresy-title pt-lg-5 text-white">NOUS CONTACTER</h2>

                    <div class="custom-underlines">
                        <div class="bg-white line"></div>
                        <div class="bg-white box"></div>
                        <div class="bg-white line"></div>
                    </div>
                    <br>
                    <div class="fiche-txt">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-map-marker-alt text-white ml-4 mr-lg-3"></i>
                            </div>
                            <div class="col">
                                <p>ADRESSE : 70 Avenue Roger Devoucoux<br>
                                    83000 -  Toulon</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-phone-alt text-white ml-4 mr-lg-3"></i>
                            </div>
                            <div class="col">
                                <p>TÉLÉPHONE : +33 6 28 22 44 71</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-envelope text-white ml-4 mr-lg-3"></i>
                            </div>
                            <div class="col">
                                <p>EMAIL : contact@flaresy.fr</p>
                            </div>
                        </div>
                        <br>
                        <div id="reseaux-icons" class="bottom-right">
                            <a class="link-reseau reseau-icon border-0" href="#" type="button"><i class="fab fa-2x fa-facebook-f icon-reseau" aria-hidden="true"></i></a>
                            <a class="link-reseau reseau-icon border-0" href="#" type="button"><i class="fab fa-2x fa-instagram icon-reseau" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="flaresy-title pt-lg-5">UN PROJET ? ÇA PEUT S'FLARE !</h2>

        <div class="custom-underlines">
            <div class="line"></div>
            <div class="box"></div>
            <div class="line"></div>
        </div>

        <form id="contact-form-element" method="POST" action="/mailing" class="pt-lg-5 pb-lg-5">
            @csrf
            <div id="contact-form">
                <div class="row">
                    <div class="col">
                        <input required id="name" name="name" class="form-control" placeholder="Nom Prénom">
                    </div>
                    <div class="col">
                        <input required type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col">
                        <input required type="tel" id="tel" name="tel" class="form-control" placeholder="Téléphone">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <textarea class="form-control" id="msg" name="msg" rows="7" placeholder="Message"></textarea>
                    </div>
                </div>
                <br>
                <button class="btn btn-flaresy">ENVOYER</button>
            </div>
        </form>

    </div>
@endsection
