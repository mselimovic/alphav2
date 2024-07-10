@extends('layouts.guest')
<header class="mt-5 bg-about">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.about') }}</h1>
    </div>
</header>
@section('content')
    <div class="container-fluid bg-white">
        <div class="container-fluid py-3">
            <div class="d-flex justify-content-evenly">
                <div class="col-4 ">
                    <div class="d-flex flex-column counter justify-content-center align-items-center ">
                        <h3 class="text-dark counter-value plus" data-target="150">0</h3>
                        <h5 class="text-dark mt-1 text-center">{{ __('common.projects') }}</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column counter justify-content-center align-items-center">
                        <h3 class="text-dark counter-value plus" data-target="100">0</h3>
                        <h5 class="text-dark mt-1 text-center">{{ __('common.clients') }}</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column counter justify-content-center align-items-center">
                        <h3 class="text-dark counter-value" data-target="5">0</h3>
                        <h5 class="text-dark mt-1 text-center">{{ __('common.years') }}</h5>
                    </div>
                </div>
            </div>
        </div>
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.counter-value').each(function() {
            let targetValue = parseInt($(this).attr('data-target'));
            let $element = $(this);
            let current = 0;
            let increment = 1;
            setInterval(function() {
                if (current >= targetValue) {
                    clearInterval();
                } else {
                    current += increment;
                    $element.text(current);
                    if (current >= targetValue && $element.hasClass('plus')) {
                        $element.text(current + '+');
                    }
                }
            }, 15);
        });
    });
</script>
