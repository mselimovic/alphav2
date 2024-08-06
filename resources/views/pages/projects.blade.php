@extends('layouts.guest')
<header class="mt-5 bg-dark">
    <div class="p-5 text-center bg-body-tertiary">
        <h1 class="pt-5 text-uppercase text-light">{{ __('common.gallery') }}</h1>
    </div>
</header>
@section('content')
    <div class="container-fluid bg-light">
        <div class="container py-5">
            <div class="text-center vh-100" style="v">
                <p class="lead">{{ __('common.coming_soon') }}</p>
                <a href="{{ route('homepage.index') }}" class="btn btn-info mt-3">{{ __('common.go_back') }}</a>
            </div>
        </div>
    </div>
@endsection
