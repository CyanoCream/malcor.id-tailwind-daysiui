<!DOCTYPE html>
<html data-theme="luxury" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <style>
        .swal-overlay {
                    background-color: rgba(43, 165, 137, 0.45);
                    }
        .swal-modal {
                    background-color: rgb(63,255,106,0.69);
                    border: 3px solid white;
                    }
        </style>
    </head>
    <body>
        @include('admin.navbar')
        <div>
            @yield('content')
        </div>




    </body>
    @include('admin.footer')
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>
@yield('js')
