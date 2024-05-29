<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        @include('partials.head')
        <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        <header>
            <!-- Navbar start -->
            @yield('navbar')
            <!-- Navbar end -->
        </header>

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <footer class="footer-background pt-5 pb-0 mt-5">
        <!-- footer star -->
        @include('partials.footer')
        <!-- footer end -->
    </footer>
        <!-- Js files -->
        @include('partials.jscripts')
</body>
</html>
