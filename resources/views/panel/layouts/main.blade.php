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
    @yield('css')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

    </head>

    <body class=" sidebar_main_open sidebar_main_swipe">

        @include('panel.includes.header')

        @include('panel.includes.sidebar')

        @yield('topbar')

        <div id="page_content">
            <div id="page_content_inner">
                @yield('content')
            </div>
        </div>

        @include('panel.includes.secondary_sidebar')
        @include('panel.includes.footer')
        
        @include('panel.includes.js')
        @yield('js')

        

    </body>
</html>