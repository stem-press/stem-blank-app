<!DOCTYPE html>
<html {{ language_attributes() }} lang="en">
    <head>
        <meta charset="{{ bloginfo( 'charset' ) }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="distribution" content="global" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#FC5047s">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        {{-- @header outputs the wordpress header stuff --}}
        @header
        {{-- Here you can use in your child templates to insert what you need in the <head> element. --}}
        @yield('head')
    </head>
    <body class="snap @if(getenv('WP_ENV')=='development') debug @endif ">
        <div id="breakpoints"></div>
        {{-- Used for debugging css breakpoints --}}
        <div id="breakpoint-debug"></div>
        <?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

        @yield('header')

        <div id="main">
            {{-- Main content --}}
            @yield('main')
        </div>


        {{-- @footer outputs all the WordPress footer stuff --}}
        @footer

        {{-- If your templates need scripts output in the bottom of the page, they go in this section --}}
        @yield('scripts')

        {{-- Include page analytics --}}
        @include('partials/analytics')
    </body>
</html>