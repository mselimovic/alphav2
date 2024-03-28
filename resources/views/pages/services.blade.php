@extends('layouts.guest')
<header class="mt-5 bg-services">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.services') }}</h1>
    </div>
</header>
@section('content')
    <div class="container-fluid py-3 bg-light">
        <div class="container-fluid">
            <div class="d-flex justify-content-evenly">
                <div class="col-4">
                    <div class="d-flex flex-column counter justify-content-center align-items-center">
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
        <div class="container-fluid">
            <div class="bg-light border-1">
                <div class="owl-carousel ">
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="card text-center" style="margin-top: 2px !important; padding-top:2px !important;">
                            <div class="card-header bg-white">
                                <h5 class="text-uppercase">{{ __('common.program_1_inner') }}</h5>
                            </div>
                            <div class="card-body bg-info">
                                <h4 class="card-title">145€</h4>
                                <span>{{ __('common.suv_50') }}</span>
                            </div>
                            <div class="card-footer bg-white">
                                @foreach (__('common.interior_program_1') as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    
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
