<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@if(Auth::user() && Auth::user()->email == 'admin@admin.com')
    @if (Request::is('/'))
        <script>window.location = "/dashboard";</script>
    @endif
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Programming Nusantara atau PROGUSA adalah salah satu website belajar bahasa pemrograman di Indonesia. PROGUSA melakukan pembelajaran dari dasar hingga menjadi profesional. PROGUSA memberikan materi-materi dalam bentuk text maupun video yang bisa di akses secara gratis oleh semua kalangan umat manusia di alam semesta ini.">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/templateadminlte/vendors/feather/feather.css">
        <link rel="stylesheet" href="/templateadminlte/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/templateadminlte/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="/templateadminlte/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="/templateadminlte/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="/templateadminlte/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="/templateadminlte/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="/templateadminlte/js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="/templateadminlte/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="/templateadminlte/images/favicon.png" />

        <!-- Custom Style -->
        @yield('custom_style')
        <style>
            th.prev, th.next, th.datepicker-switch{
                cursor: pointer;
            }
            .box-time{
                padding: 10px;
                background-color: black;
                color: white;
            }
            .navbar .navbar-brand-wrapper .navbar-brand{
                color: #002bff;
            }
            .navbar .navbar-brand-wrapper .navbar-brand:active, .navbar .navbar-brand-wrapper .navbar-brand:focus, .navbar .navbar-brand-wrapper .navbar-brand:hover{
                color: #0d31e7;
            }
        </style>
    </head>
    <body>      
        <div class="container-scroller">            
            {{ View::make('layouts.admin.navbaradmin') }}
            <div class="container-fluid page-body-wrapper">
                {{ View::make('layouts.admin.settingadmin') }}
                {{ View::make('layouts.admin.sidebaradmin') }}
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content_admin')
                    </div>
                    {{ View::make('layouts.admin.footeradmin') }}
                </div>
            </div>
        </div>
    </body>

    <!-- plugins:js -->
    <script src="/templateadminlte/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @yield('plugin_js')
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/templateadminlte/js/off-canvas.js"></script>
    <script src="/templateadminlte/js/hoverable-collapse.js"></script>
    <script src="/templateadminlte/js/template.js"></script>
    <script src="/templateadminlte/js/settings.js"></script>
    <script src="/templateadminlte/js/todolist.js"></script>
    <!-- endinject -->
    
    <!-- Custom js for this page-->
    @yield('custom_js')
    <!-- End custom js for this page-->
@else
    @if (Request::is('manager/*'))
        <script>window.location = "/dashboard";</script>
    @endif
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Programming Nusantara atau PROGUSA adalah salah satu website belajar bahasa pemrograman di Indonesia. PROGUSA melakukan pembelajaran dari dasar hingga menjadi profesional. PROGUSA memberikan materi-materi dalam bentuk text maupun video yang bisa di akses secara gratis oleh semua kalangan umat manusia di alam semesta ini.">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('title_page')

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Link Font-Style -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:wght@600&display=swap&effect=anaglyph"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />
        
        <!-- Link Icon -->
        <link rel="icon" type="image/ico" href="{{ asset('img/logo_icon.ico') }}">
        
        <!-- Link Custom Css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield('custom_style')
    </head>
    
    <body>
        <div id="app">
            <!-- Navbar -->
            {{ View::make('layouts.navbar') }}
            <!-- End Navbar-->
            
            <main>
                <div id="content">
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            {{ View::make('layouts.footer') }}
            <!-- End Footer -->

            <!-- Required Script Bootstrap 5 -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>

            <script src="{{ asset('js/kode.js') }}"></script>
            
            <!-- MDB -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>

            <script>
                document.documentElement.style.setProperty('--nav-height', document.getElementById("navbar").offsetHeight + 'px');
            </script>

            <!-- Custom Script -->
            @yield('custom_js')
            
        </div>
    </body>
@endif


</html>
