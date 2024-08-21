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
<script src="{{ asset('js/jquery/jquery.min.js') }}" async="async"></script>
<script src="{{ asset('js/lib/wow/owl.min.js') }}" async="async"></script>
<script src="{{ asset('js/main.js') }}" async="async"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" async="async"></script>
<script src="{{ asset('js/lib/wow/wow.min.js') }}" async="async"></script>

{{-- CSS libraries --}}

<link href="{{ asset('css/lib/wow/owl.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/lib/wow/animate.min.css')}}" rel="stylesheet">
</body>