@extends('layouts.guest')
<header class="mt-5 bg-dark">
    <div class="p-5 text-center">
        {{-- <h1 class="pt-5 text-uppercase text-light">{{ __('common.request') }}</h1> --}}
    </div>
</header>
@section('content')
    <div class="container-fluid bg-light">
        <div class="container py-5">
            <div class="text-center"> 
                <h2 class="mb-4">{{ __('common.thank_you') }}</h2>
                <p class="lead">{{ __('common.thank_you_header') }}</p>
                <p>{{ __('common.thank_you_msg') }}</p>
                <a href="{{ route('homepage.index') }}" class="btn btn-info mt-3">{{ __('common.go_back') }}</a>
            </div>
        </div>
    </div>
@endsection