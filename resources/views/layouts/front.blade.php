
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>



    <!--FONT & icon -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="admin/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">



    <link href="{{asset('frontend/css/custom.css')}} " rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap5.css')}} " rel="stylesheet">
    <link href="{{asset('frontend/css/owl.carousel.min.css')}} " rel="stylesheet">
    <link href="{{asset('frontend/css/owl.theme.default.min.css')}} " rel="stylesheet">

    <script type="text/javascript" src="{{asset('frontend/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"  ></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"  ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





</head>
<body>

            @include('layouts.inc.frontnavbar')
            <div class="content">
                    @yield('content')
                </div>
@if (session('status'))
    <script>
        swal("{{session('status')}}");
</script>
@endif

    @yield('scripts')
</body>
</html>
