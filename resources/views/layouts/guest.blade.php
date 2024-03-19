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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}" async="async"></script>
<script src="{{ asset('js/lib/wow/wow.js') }}" async="async"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- CSS libraries --}}

<link href="{{ asset('css/lib/wow/animate.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/slider.css') }}" rel="stylesheet">
<link href="{{ asset('css/neon.css') }}" rel="stylesheet">
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
<link href="{{ asset('css/first_section.css') }}" rel="stylesheet">
<link href="{{ asset('css/second_section.css') }}" rel="stylesheet">
<link href="{{ asset('css/third_section.css') }}" rel="stylesheet">
<link href="{{ asset('css/fourth_section.css') }}" rel="stylesheet">
</body>