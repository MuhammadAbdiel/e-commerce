<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/icon/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles
</head>

<body>
    <div id="app">

        @livewire('navbar')

        <main class="py-4">

            @if (Request::is('login') || Request::is('register'))
            @yield('content')
            @else
            {{ $slot }}
            @endif

        </main>

        <footer class="sticky-bottom">
            <hr>
            <div class="container text-center">
                <p class="text-muted">Copyright &copy; 2021 | All right reserved.</p>
            </div>
        </footer>
    </div>

    {{-- Icons --}}
    <script src="{{ asset('assets/icon/js/all.js') }}"></script>

    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')

    {{-- Sweet Alert 2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireScripts

    <script>
        window.addEventListener('swal', function (event) {
            Swal.fire(event.detail);
        });
    </script>

    <script>
        window.addEventListener('show-delete-confirmation', function (event) {
            Swal.fire({
                title: 'Confirmation',
                text: "Are you sure to delete this data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed');
                }
            })
        });
    </script>
</body>

</html>