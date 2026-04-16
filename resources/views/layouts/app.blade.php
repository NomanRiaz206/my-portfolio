<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
    @stack('styles')
</head>

<body>
<div class="container-fluid">
    <div class="row">
        @include('partials.navbar')
        <main>
            @yield('content')
        </main>

    </div>

</div>

@include('partials.footer')

@stack('scripts')
</body>
</html>
