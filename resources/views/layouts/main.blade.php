<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.meta')
        @yield('meta')
        <link rel="icon" href="favicon.ico">
        <title>@yield('title', "Maintenance")</title>
        <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('theme/assets/img/favicon-32x32.png') }}" sizes="32x32">
        @include('includes.css')
        @yield('css')
    </head>

    @section('bodyTag')
    <body>
    @show
        <!-- Loader -->
        <div id="loader-wrapper" class="loader-on">
            <div id="loader">
                <div class="loader">
                    <div class="bolt one">
                        <div class="other"></div>
                    </div>
                    <div class="bolt two">
                        <div class="other"></div>
                    </div>
                    <div class="bolt three">
                        <div class="other"></div>
                    </div>loading
                </div>
            </div>
        </div>

        @include('includes.header')

        @section('pageContentTag')
        <div id="page-content">        
        @show
            @yield('content')
        </div>

        @include('includes.footer')

        @include('includes.js')
        @yield('js')
    </body>

</html>    