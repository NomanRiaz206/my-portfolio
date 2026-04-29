<!DOCTYPE html>
<html>
<head>
    @include('admin.partials.head')
    @stack('styles')
</head>

<body class="site-body">
    <div id="page-loader" class="page-loader" aria-hidden="true">
        <div class="page-loader__inner">
            <span class="page-loader__line"></span>
        </div>
    </div>

    <div class="cursor-glow" id="cursorGlow"></div>

    @include('admin.partials.navbar')

    <main id="smooth-content" class="pt-[72px]">
        @yield('content')
    </main>

    @include('admin.partials.footer')

@stack('scripts')
</body>

</html>
