@extends('layouts.guest')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<style>
    #map {
        width: 100%;
        height: 0;
        padding-bottom: 100%; 
        position: relative;
    }
    .leaflet-container {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
</style>

<header class="mt-5 bg-dark bg-contact">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.contact') }}</h1>
    </div>
</header>

@section('content')
    <div class="bg-white container my-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row gx-5">
            <div class="col-lg-6 col-md-6 col-12">
                <form method="POST" id="requestForm" action="{{ route('submit.form') }}">
                    @csrf
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <label for="full_name">{{ __('common.full_name') }}</label>
                                <input type="text" class="form-control" id="fullName" name="full_name" placeholder="">
                            </div>
                            <div class="col-12 pt-3">
                                <label for="email">{{ __('common.email') }}</label>
                                <input type="email" class="form-control" id="email" placeholder="" name='email'>
                            </div>
                            <div class="col-12 pt-3">
                                <label for="phone_number">{{ __('common.phone_number') }}</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                    placeholder="">
                            </div>
                            <div class="col-12 pt-3">
                                <label for="subject">{{ __('common.subject') }}</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                            </div>
                            <div class="pt-3">
                                <label for="message">{{ __('common.message') }}</label>
                                <textarea type="text" class="form-control" id="message" name="message" rows="5" placeholder=""> </textarea>
                            </div>
                        </div>
                        <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" value="1" id="gdpr_rules"
                                name="gdpr_rules">
                            <label class="form-check-label" for="gdpr_rules">
                                {{ __('common.gdpr_rules') }} <a
                                    href="{{ route('pages.privacy') }}">{{ __('common.privacy_policy') }}</a>
                            </label>
                            @error('gdpr_rules')
                                <span class="text-danger" style="position:relative; bottom: -1px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-warning px-5"
                                id="sendButton">{{ __('common.send') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script>
        function toggleSendButton() {
            var gdprCheckbox = document.getElementById('gdpr_rules');
            var sendButton = document.getElementById('sendButton');

            if (gdprCheckbox.checked) {
                sendButton.removeAttribute('disabled');
            } else {
                sendButton.setAttribute('disabled', 'disabled');
            }
        }
        var gdprCheckbox = document.getElementById('gdpr_rules');
        gdprCheckbox.addEventListener('change', toggleSendButton);
        toggleSendButton();
    </script>

    <script>
        var map = L.map('map', {
            zoomControl: false,
            scrollWheelZoom: true
        }).setView([48.45682789338635, 11.501841547968308], 14);

        L.tileLayer('https://tile.openstreetmap.de/{z}/{x}/{y}.png', {
        }).addTo(map);

        const acdIcon = L.icon({
            iconUrl:'img/icon.png',
            iconSize: [38, 38],
            iconAnchor: [20, 42],
            popupAnchor: [0, -21]
        });

        const marker = L.marker([48.45683634267897, 11.50184087741611], {icon: acdIcon}).addTo(map);

        marker.bindPopup("<b>Alpha Car Detail</b><br>Kastanienring 2, 85293 Reichertshausen, Germany<br>+49 1575 7838320");
        setTimeout(function() {
            map.invalidateSize();
            map.setView([48.45682789338635, 11.501841547968308], 14);
        }, 200);
  </script>

@endsection
