<div id="menu-wrap" class="menu-back cbp-af-header pt-0 pb-0 fixed-top">
    <div class="">
        <div class="top-nav gx-0 align-items-center d-none d-lg-flex bg-alpha-primary" style="">
            <div class="container-xxl d-flex align-items-center">
                <div class="col-lg-6 text-start px-0">
                    <div class="d-flex">
                        <a href="" class="d-flex align-items-center " style="text-decoration: none;"><i
                                class="fa-regular fa-clock" style="color: #fff"></i>
                            <p class="text-light mb-0 ps-2">@lang('common.mon_sat') 8-17h</p>
                        </a>
                    </div>
                </div>
                <div
                    class="col-lg-6 text-end text-light px-0 d-flex align-items-center justify-content-end lang-menu-drop">
                    <div class="d-flex">
                        <a href="mailto:info@alphacardetail.com" class="d-flex align-items-center "
                            style="text-decoration: none;"> <i class="fa-regular fa-envelope" style="color: #fff"></i>
                            <p class="text-light mb-0 ps-2">info@alphacardetail.com</p>
                        </a>
                        <a href="tel:+49 1575 7838320" class="d-flex align-items-center ps-3"
                            style="text-decoration: none;"> <i class="fa-solid fa-phone-volume" style="color: #fff"></i>
                            <p class="text-light mb-0 ps-2">+49 1575 7838320</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-alpha-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage.index') }}"><img src="img/logo-alpha-04.png" height="50px" alt="Alpha" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('homepage.index') }}">{{__('common.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pages.about') }}">{{__('common.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pages.services') }}">{{__('common.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pages.request') }}">{{__('common.request')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pages.projects') }}">{{__('common.gallery')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('pages.contact') }}">{{__('common.contact')}}</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn px-3 bg-warning" data-bs-toggle="dropdown">
                    {{__('common.language_' . app()->getLocale())}}
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-warning sub-shadow" style="min-width: 0;">
                    <li><a class="dropdown-item text-dark" href="{{ route('lang', ['locale' => 'de']) }}">
                           {{__('common.language_de')}}</a></li>
                    <li><a class="dropdown-item text-dark" href="{{ route('lang', ['locale' => 'en']) }}">
                           {{__('common.language_en')}}</a></li>
                    <li><a class="dropdown-item text-dark" href="{{ route('lang', ['locale' => 'ba']) }}">
                           {{__('common.language_ba')}}</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
