<div class="container-fluid py-5 bg-white d-flex align-items-center" style="min-height: 100vh;">
  <div class="container">
      <div class="row g-5 d-flex align-items-center">
          <div class="col-lg-6  wow fadeIn" data-wow-delay="0.3s">
              <div class="about-img">
                  <img class="img-fluid" src={{ asset('img/about-img.png') }}>
              </div>
          </div>
          <div class="col-lg-6  wow fadeIn" data-wow-delay="0.4s">
              <h1 class="mb-4">{{ __('common.about_heading')}}</h1>
              <p class="mb-4" style="font-size: 1.2rem;">{{__('common.about_text')}}</p>
              <div class="row g-3"> 
                  <div class="col-sm-6">
                      <h6 class="mb-3"><i class="fa fa-check text-success me-2"></i>{{__('common.certified')}}</h6>
                      <h6 class="mb-0"><i class="fa fa-check text-success me-2"></i>{{__('common.professional_staff')}}</h6>
                  </div>
                  <div class="col-sm-6">
                      <h6 class="mb-3"><i class="fa fa-check text-success me-2"></i>{{__('common.free_advices')}}</h6>
                      <h6 class="mb-0"><i class="fa fa-check text-success me-2"></i>{{__('common.fair_prices')}}</h6>
                  </div>
              </div>
              <div class="d-flex align-items-center mt-4">
                  <a class="btn btn-info mx-1" href="{{ route('pages.about') }}">{{__('common.read_more')}}</a>
                  <a class="btn btn-outline-info btn-square " target="_blank" href="https://www.facebook.com/ArminDetailing"><i class="fab fa-facebook"></i></a>
                  <a class="btn btn-outline-info btn-square mx-1" target="_blank" href="https://www.youtube.com/channel/UC16yakjRKE1OSRNuThzydCw"><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-info btn-square " target="_blank" href="https://www.instagram.com/alphaacardetaailing/"><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-outline-info btn-square mx-1" target="_blank" href="https://www.tiktok.com/@alphadetailing3"><i class="fab fa-tiktok"></i></a>
              </div>
          </div>
      </div>
  </div>
</div>