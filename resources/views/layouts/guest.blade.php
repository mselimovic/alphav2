@include('layouts.header')

<body>

{{-- navbar --}}
@section('navbar')
@include('layouts.navbar')
@show
{{-- content --}}
@yield('content')

{{-- footer --}}
@section('footer')
@include('layouts.footer')
@show

{{--JS libraries --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}" async="async"></script>

{{-- CSS libraries --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/slider.css') }}" rel="stylesheet">
<link href="{{ asset('css/neon.css') }}" rel="stylesheet">
</body>