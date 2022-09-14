<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{asset('contents/admin')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('contents/admin')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/quill/quill.snow.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/quill/quill.bubble.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/vendor/simple-datatables/style.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/custom.css">
</head>

<body>
    @include('layouts.admin-template-parts.header')
    @include('layouts.admin-template-parts.sidebar')
    <main id="main" class="main">
        @include('layouts.admin-template-parts.breadcrumb')
        @yield('content')
    </main>
    @include('layouts.admin-template-parts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="{{asset('contents/admin')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/main.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>
</body>
</html>
