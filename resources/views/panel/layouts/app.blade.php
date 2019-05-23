<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    @include('panel.includes.meta')
    @yield('meta')
    <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon-32x32.png') }}" sizes="32x32">

    <title>Altair Admin v2.2.0</title>
    
    @include('panel.includes.css')
    <link rel="stylesheet" href="{{ asset('theme/assets/css/login_page.min.css') }}" />
    @yield('css')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>
<body class="login_page">

    <div class="login_page_wrapper">
        @yield('content')
    </div>

    @include('panel.includes.js')
    @yield('js')
    
</body>
</html>