@extends('layouts.guest')
<header class="mt-5 bg-services">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.services') }}</h1>
    </div>
</header>
@section('content')
    <div class="container-fluid py-3 bg-light">
        <div class="container-fluid mt-3">
            <div class="bg-white">
                <div class="owl-carousel row ">
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_ceramic') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">245€</h4>
                                <span>{{ __('common.suv_40') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.ceramic_program_1') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_polish') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">275€</h4>
                                <span>{{ __('common.suv_60') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.polish_program_1') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_2_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">235€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_alpha_intensiv') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_2_ceramic') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">345€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.ceramic_program_2') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_2_polish') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">375€</h4>
                                <span>{{ __('common.suv_75') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.polish_program_2') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_3_ceramic') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">700€</h4>
                                <span>{{ __('common.suv_110') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.ceramic_program_alpha') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="item border border-1 shadow" style="min-height: 500px !important;">
                        <div class="card text-center" style="padding:0px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_3_polish') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">545€</h4>
                                <span>{{ __('common.suv_95') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.polish_program_alpha') as $item)
                                    <p class="m-1">{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="row g-4">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-round d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-hand-sparkles fa-3x"></i>
                                </div>
                                <h5 class="mb-3">{{__('common.ceramic_card_heading')}}</h5>
                                <p>{{__('common.ceramic_description')}}</p>
                                <a class="btn px-3 mt-auto mx-auto" href="{{ route('pages.services') }}">{{__('common.read_more')}}</a>
                            </div>
                        </div>                         
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-round d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-car fa-3x"></i>
                                </div>
                                <h5 class="mb-3">{{__('common.polish_card_heading')}}</h5>
                                <p>{{__('common.polish_description')}}</p>
                                <a class="btn px-3 mt-auto mx-auto" href="{{ route('pages.services') }}">{{__('common.read_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="row g-4">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-round d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-soap fa-3x"></i>
                                </div>
                                <h5 class="mb-3">{{__('common.interior_card_heading')}}</h5>
                                <p>{{__('common.interior_description')}}</p>
                                <a class="btn px-3 mt-auto mx-auto" href="{{ route('pages.services') }}">{{__('common.read_more')}}</a>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-round d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-drum-steelpan fa-3x"></i>
                                </div>
                                <h5 class="mb-3">{{__('common.wheels_heading')}}</h5>
                                <p>{{__('common.wheels_description')}}</p>
                                <a class="btn px-3 mt-auto mx-auto" href="{{ route('pages.services') }}">{{__('common.read_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<style>
    .owl-stage-outer {
        padding-bottom: 20px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: false,
            stagePadding: 15,
            margin: 10,
            nav: true,
            navText: [
                '<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>',
                '<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                640: {
                    items: 2
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 5
                }
            }
        })
    });
</script>
