@include('app.inc.header')

<body>
    <div class="page">
        <!-- Navbar -->
        @include('app.inc.menu')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                @yield('content')
            </div>
            @include('app.inc.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('asets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('asets/dist/js/tabler.demo.js') }}" defer></script>
</body>

</html>
