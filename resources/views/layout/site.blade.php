<!DOCTYPE html>
<!-- saved from url=(0038)http://www.wpkixx.com/html/winku-dark/ -->
<html lang="en" class=" ">
<head>
    @include('site.includes.styles')
    @include('site.includes.meta')
    @include('site.includes.links')
    @include('site.includes.scripts')
</head>
<body>
@include('site.includes.nav')
<!--<div class="se-pre-con"></div>-->
<div id="mm-0" class="mm-page mm-slideout">
    <div class="theme-layout">
        @include('site.includes.header')

{{--        @include('site.includes.top_bar')--}}

{{--        @include('site.includes.right_sidebar')--}}

{{--        @include('site.includes.left_sidebar')--}}

        @yield('content')

{{--        @include('site.includes.footer')--}}

{{--        @include('site.includes.side_panel')--}}

        @include('site.includes.spinner')
    </div>
</div>

@include('site.includes.latest_scripts')

<div id="mm-blocker" class="mm-slideout"></div>
</body>
</html>
