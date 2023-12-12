<div class="container-fluid bg-light py-2">
    <div class="row g-4">
        <div class="col-lg-3 wow fadeIn">
            <h1 class="text-uppercase pt-4">
                @lang('common.pro_care')
            </h1>
            <a href="#" class="neon-btn text-uppercase">@lang('common.schedule')</a>
        </div>
        <div class="col-lg-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="case-item position-relative overflow-hidden rounded mb-2">
                <img class="img-fluid" src="img/ceramic.png" alt="alpha ceramic coating">
                <a class="case-overlay text-decoration-none" href="">
                    <h5 class="first">@lang('common.ceramic_card_heading')</h5>
                    {{-- <span class="btn btn-square bg-alpha-secondary"><i class="fa fa-arrow-right"></i></span> --}}
                </a>
            </div>
        </div>
        <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="case-item position-relative overflow-hidden rounded mb-2">
                <img class="img-fluid" src="img/polish.jpg" alt="alpha polishing ">
                <a class="case-overlay text-decoration-none" href="">
                    <h5 class="second">@lang('common.polish_card_heading')</h5>
                </a>
            </div>
        </div>
        <div class="col-lg-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="case-item position-relative overflow-hidden rounded mb-2">
                <img class="img-fluid" src="img/inner.jpg" alt="alpha inner cleaning">
                <a class="case-overlay text-decoration-none" href="">
                    <h5 class="third">@lang('common.interior_card_heading')</h5>
                    {{-- <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                    </h5> --}}
                </a>
            </div>
        </div>
    </div>
</div>
