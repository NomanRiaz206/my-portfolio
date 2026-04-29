<!DOCTYPE html>
<html>
<head>
    @include('admin.partials.head')
    @stack('styles')
</head>

<body class="min-h-screen bg-slate-950 text-white">
    @yield('content')
    @stack('scripts')
</body>

</html>