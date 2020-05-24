<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flaresy - Agence audiovisuelle</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/nos-prods.js') }}"></script>
    <script src="{{ asset('js/new-user.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
</head>
<body>
@include('navbar')

<div id="content">

    @yield('content')

    <div id="copyright">
        <div class="row" id="copyright-container">
            <div class="col-8">
                © Copyright 2020 | Tous droits réservés - Mentions légales | Un site Flaresy.
            </div>

            <div class="col">
                <div id="reseaux-icons">
                    <a class="link-reseau reseau-icon border-0" href="https://www.facebook.com/flaresyagency" type="button"><i class="fab fa-2x fa-facebook-f icon-reseau" aria-hidden="true"></i></a>
                    <a class="link-reseau reseau-icon border-0" href="https://www.instagram.com/flaresyagency/" type="button"><i class="fab fa-2x fa-instagram icon-reseau" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgYeCP7r8tU0x9BUYCfdTwoiCMczmCxmc&callback=initMap" async defer></script>
<script>
    var map, popup, Popup;


    /** Initializes the map and the custom popup. */
    function initMap() {
        var latLng = new google.maps.LatLng(43.121359,5.939906);

        map = new google.maps.Map(document.getElementById('map'), {
            center: latLng,
            zoom: 17,
        });

        var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            title:"Agence Flaresy" +
                "IUT MMI Toulon",
            optimized: false,
            visible: true
        });

        Popup = createPopupClass();
        popup = new Popup(
            new google.maps.LatLng(43.121359, 5.939906),
            document.getElementById('marker-gmap'));
        popup.setMap(map);
    }

    function createPopupClass() {
        function Popup(position, content) {
            this.position = position;

            content.classList.add('popup-bubble');

            var bubbleAnchor = document.createElement('div');
            bubbleAnchor.classList.add('popup-bubble-anchor');
            bubbleAnchor.appendChild(content);

            this.containerDiv = document.createElement('div');
            this.containerDiv.classList.add('popup-container');
            this.containerDiv.appendChild(bubbleAnchor);

            google.maps.OverlayView.preventMapHitsAndGesturesFrom(this.containerDiv);
        }

        Popup.prototype = Object.create(google.maps.OverlayView.prototype);

        Popup.prototype.onAdd = function() {
            this.getPanes().floatPane.appendChild(this.containerDiv);
        };

        Popup.prototype.onRemove = function() {
            if (this.containerDiv.parentElement) {
                this.containerDiv.parentElement.removeChild(this.containerDiv);
            }
        };

        Popup.prototype.draw = function() {
            var divPosition = this.getProjection().fromLatLngToDivPixel(this.position);

            var display = Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000 ? 'block' : 'none';

            if (display === 'block') {
                this.containerDiv.style.left = divPosition.x + 'px';
                this.containerDiv.style.top = divPosition.y + 'px';
            }
            if (this.containerDiv.style.display !== display) {
                this.containerDiv.style.display = display;
            }
        };

        return Popup;
    }
</script>
</html>
