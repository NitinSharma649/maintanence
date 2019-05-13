<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
    <head>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Altair Admin v2.2.0</title>
    
    @include('includes.css')
    @yield('css')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

    </head>

    <body class=" sidebar_main_open sidebar_main_swipe">

        @include('includes.header')

        @include('includes.sidebar')

        <div id="page_content">
            <div id="page_content_inner">
                @yield('content')
            </div>
        </div>

        @include('includes.secondary_sidebar')
        @include('includes.footer')

        <div id="style_switcher">
            <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
            <div class="uk-margin-medium-bottom">
                <h4 class="heading_c uk-margin-bottom">Colors</h4>
                <ul class="switcher_app_themes" id="theme_switcher">
                    <li class="app_style_default active_theme" data-app-theme="">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_a" data-app-theme="app_theme_a">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_b" data-app-theme="app_theme_b">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_c" data-app-theme="app_theme_c">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_d" data-app-theme="app_theme_d">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_e" data-app-theme="app_theme_e">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_f" data-app-theme="app_theme_f">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                    <li class="switcher_theme_g" data-app-theme="app_theme_g">
                        <span class="app_color_main"></span>
                        <span class="app_color_accent"></span>
                    </li>
                </ul>
            </div>
            <div class="uk-visible-large uk-margin-medium-bottom">
                <h4 class="heading_c">Sidebar</h4>
                <p>
                    <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
                    <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
                </p>
            </div>
            <div class="uk-visible-large">
                <h4 class="heading_c">Layout</h4>
                <p>
                    <input type="checkbox" name="style_layout_boxed" id="style_layout_boxed" data-md-icheck />
                    <label for="style_layout_boxed" class="inline-label">Boxed layout</label>
                </p>
            </div>
        </div>
        
        @include('includes.js')
        @yield('js')

    </body>
</html>