<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Premium Portfolio')</title>
<meta name="description" content="A premium multi-page Laravel portfolio website.">
<meta name="theme-color" content="#090909">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



@push('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@endpush
@push('scripts')
 <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endpush