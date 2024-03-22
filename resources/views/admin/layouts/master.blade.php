<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>

    @include('admin.layouts.head-tag')

    @yield('head-tag')

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        <div class="page-wrapper">

            @yield('content')
            
        </div>
    </div>

    @include('admin.layouts.custom-sidebar')


    @include('admin.layouts.script')

    @yield('script')

</body>

</html>
