<div class="container-fluid text-white-50 footer pt-5 bg-dark">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
            <a class="navbar-brand" href="#"><img src="img/logo-alpha-04.png" height="70px" alt="..." /></a>
              <p class="mb-0">{{ __('common.slider_text') }}</p>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
              <h5 class="text-white mb-4">{{__('common.git')}}</h5>
              <p><i class="fa fa-map-marker-alt me-3"></i>Kastanienring 2, Grafing 85293 Reichertshausen, Germany</p>
              <p><i class="fa fa-phone-alt me-3"></i>+491 575 783 8323</p>
              <p><i class="fa fa-envelope me-3"></i>info@alphacardetail.com</p>
              <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.facebook.com/ArminDetailing"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.youtube.com/channel/UC16yakjRKE1OSRNuThzydCw"><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.instagram.com/alphaacardetaailing/"><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.tiktok.com/@alphadetailing3"><i class="fab fa-tiktok"></i></a>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
              <h5 class="text-white mb-4">{{__('common.popular')}}</h5>
              <a class="btn btn-link" href="{{ route('pages.about') }}">{{__('common.about')}}</a>
              <a class="btn btn-link" href="{{ route('pages.contact') }}">{{__('common.contact')}}</a>
              <a class="btn btn-link" href="{{ route('pages.services') }}">{{__('common.services')}}</a>
              <a class="btn btn-link" href="">{{__('common.terms')}}</a>
              <a class="btn btn-link" href="{{ route('pages.faq') }}">{{__('common.faq')}}</a>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
              <h5 class="text-white mb-4">{{__('common.our_services')}}</h5>
              <a class="btn btn-link" href="">{{__('common.ceramic_card_heading')}}</a>
              <a class="btn btn-link" href="">{{__('common.polish_card_heading')}}</a>
              <a class="btn btn-link" href="">{{__('common.interior_card_heading')}}</a>
              <a class="btn btn-link" href="">{{__('common.wheel_restoration_heading')}}</a>
          </div>
      </div>
  </div>
  <div class="container wow fadeIn" data-wow-delay="0.1s">
      <div class="copyright">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="text-white"> &copy; {{ date('Y') }} <a class="text-white" href="#">www.alphacardetail.com</a> | Web development by SugarHill Studio </p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  <div class="footer-menu">
                      <a href="">{{__('common.home')}}</a>
                      <a href="">{{__('common.cookies')}}</a>
                      <a href="">{{__('common.impressum')}}</a>
                      <a href="">{{__('common.faqs')}}</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>