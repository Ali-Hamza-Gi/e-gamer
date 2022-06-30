
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.4.0/dist/simple-notify.min.css" />
    <style>
        .img-radius {
            width: 60px !important;
            height: 60px !important;
        }
        @media(max-width:992px) {
            .pcoded-header {
                width: 100% !important;
                margin-left: 0 !important;
            }
        }
    </style>
    @yield('style')
</head>

<body>

    <div class="dashboard">
        @include('admin._inc.header')

        @include('admin._inc.sidebar')

        @yield('content')
    </div>







    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.4.0/dist/simple-notify.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Alerts -->
    @if (session('success'))
        <script>
            new Notify({
                status: 'success',
                title: 'Alert!',
                text: '{{ session('success') }}',
                effect: 'fade',
                speed: 300,
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 2000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right top'
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            new Notify({
                status: 'error',
                title: 'Alert!',
                text: '{{ session('error') }}',
                effect: 'fade',
                speed: 300,
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 2000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right top'
            })
        </script>
    @endif
    @if (session('warning'))
        <script>
            new Notify({
                status: 'warning',
                title: 'Alert!',
                text: '{{ session('warning') }}',
                effect: 'fade',
                speed: 300,
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 2000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right top'
            })
        </script>
    @endif
    @yield('script')

</body>

</html>
