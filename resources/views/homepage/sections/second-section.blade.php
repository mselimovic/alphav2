<div id="services" class="container-fluid py-5" style="background-color:#0092ca;;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-1 text-white px-3 mb-3">{{__('common.our_services')}}</div>
                <h1 class="mb-4">{{__('common.our_services_heading')}}</h1>
                <h4 class="mb-4">{{__('common.services_description')}}</h4>
                <a class="btn btn-outline-light rounded-1 px-4" href="{{ route('pages.services') }}">{{__('common.read_more')}}</a>
            </div>
            <div class="col-lg-7">
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
                    <div class="col-md-6 pt-md-4">
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
    </div>
</div>