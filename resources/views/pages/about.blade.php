@extends('layouts.guest')
<header class="mt-5 bg-about">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.about') }}</h1>
    </div>
</header>
@section('content')
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row justify-content-evenly align-items-center py-3">
                <div class="col-lg-3 col-md-6 ">
                    <div class="img-border">
                        <img class="img-fluid inner-img" src="{{ asset('img/about/alpha_owner.webp') }}"
                            alt="Alpha Car Detail About Owner">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4>{{ __('common.our_story') }}</h4>
                    <p>{{ __('common.our_story_text_1') }}</p>
                    <p>{{ __('common.our_story_text_2') }}</p>
                </div>
            </div>
            <div class="row justify-content-evenly align-items-center py-3">
                <div class="col-lg-5 col-sm-6 order-lg-2">
                    <div class="img-border-right">
                        <img class="img-fluid inner-img" src="{{ asset('img/about/alpha_about_car.webp') }}"
                            alt="Alpha Car Detail about section">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6 order-lg-1">
                    <h4>{{ __('common.our_mission') }}</h4>
                    <p>{{ __('common.our_mission_text_1') }}</p>
                    <p>{{ __('common.our_mission_text_2') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
