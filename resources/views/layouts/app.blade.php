<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
    @stack('styles')
</head>

<body class="site-body">
    <div id="page-loader" class="page-loader" aria-hidden="true">
        <div class="page-loader__inner">
            <span class="page-loader__line"></span>
        </div>
    </div>

    <div class="cursor-glow" id="cursorGlow"></div>

    @include('partials.navbar')

    <main id="smooth-content">
        @yield('content')
    </main>

    @include('partials.footer')
@stack('scripts')
</body>

</html>
