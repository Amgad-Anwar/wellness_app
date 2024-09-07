<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!--plugins-->
{{--    --}}
    {{--notification--}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/notifications/css/lobibox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css') }}" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ config('sweetalert.animatecss') }}">
    <!-- Bootstrap CSS -->

    @if(LaravelLocalization::getCurrentLocaleDirection()=='rtl')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@laylazi/bootstrap-rtl@4.6.2-1/dist/css/bootstrap-rtl.css" />
        <style>
            .top-header{
                left: 0!important;
                right: 260px!important;
            }
            .wrapper.toggled .top-header {
                left: 0!important;
                right: 80px!important;
            }
            .footer{
                margin-right: 260px;
                margin-left: auto!important;
            }
            .wrapper.toggled .footer {
                margin-right: 80px;
                margin-left: auto!important;
            }
            .sidebar-header{
                padding: 0px 15px 0px 0px!important;
            }
            .pace .pace-activity{
                left: 15px!important;
                right: auto!important;
            }
            .sidebar-wrapper{
                right: 0!important;
            }
            .page-content-wrapper{
                margin-right: 260px!important;
                margin-left: 0!important;
            }
            .apexcharts-legend-marker{
                margin-left: 3px!important;
                margin-right: 0!important;
            }
            .ml-auto, .mx-auto {
                margin-right: auto !important;
                margin-left: 0!important;
            }
            .ml-2, .mx-2 {
                margin-right: 0.5rem !important;
                margin-left: 0 !important;
            }
            .ml-3, .mx-3{
                margin-right: 1rem !important;
                margin-left: 0 !important;

            }
            .sidebar-wrapper .metismenu a{
                justify-content: right!important;
            }
            .sidebar-wrapper .metismenu a .menu-title{
                margin-right: 10px;
                margin-left: 0;
            }
            .dropdown-menu-right {
                left: 0!important;
                right: auto!important;
            }
            .top-header .navbar .dropdown-menu::after{
                left: 28px!important;
                right: auto!important;
            }
            .dropdown-user-profile .dropdown-menu i {
                margin-left: 10px;
                margin-right: auto!important;
            }
            .user-info{
                margin-left: 15px;
                margin-right: auto!important;
            }
            .dropdown-lg .msg-avatar{
                margin-left: 15px;
                margin-right: auto!important;
            }
            .float-right{
                float: left!important;
            }
            .float-left{
                float: right!important;
            }
            .pl-3, .px-3 {
                padding-right: 1rem !important;
                padding-left: 0 !important;
            }
            .page-breadcrumb .breadcrumb-item+.breadcrumb-item::before{
                content: "\ea5a"!important;
            }
            .lang span{
                padding-right: 6px;
                padding-left: auto;
            }
            .switcher-wrapper{
                left: -280px;
                right: auto!important;
            }
            .switcher-btn{
                left: 100%;
                right:auto!important;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px;
            }
            @media (min-width: 992px){
                .ml-lg-auto, .mx-lg-auto {
                    margin-right: auto !important;
                }
            }
        </style>
    @else
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
   @endif
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
    <!-- Scripts -->
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <style>
        .loading {
            position: relative;
        }
        .loading::after {
            position: absolute;
            background: center 1.7857142857rem no-repeat rgba(255, 255, 255, .5);
            background-image: url('{{ asset('images/med-loading/rolling.gif') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-color: rgba(250, 250, 250, .8);
            background-size: 3.7857142857rem auto;
        }
        .loading::after {
            display: block!important;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: 148;
            content: ' '!important;
            line-height: 0;
        }
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #ffffff;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        .avatar-upload .avatar-edit input + label:after {
            content: "\f044";
            font-family: "Font Awesome 5 Free";
            color: #757575;
            position: absolute;
            top: 10px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #f8f8f8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

    </style>
    @stack('headScripts')
</head>
<body class="@yield('bodyClass')">
    <div id="app">
        <!-- wrapper -->
        <div class="wrapper">
            <!--sidebar-wrapper-->
            <div class="sidebar-wrapper" data-simplebar="true">
                <div class="sidebar-header">
                    <div class="">
                        <img src="{{ asset('assets') }}/images/logo-icon.png" class="logo-icon-2" alt="" />
                    </div>
                    <div>
                        <h4 class="logo-text">{{ config('app.name', 'Laravel') }}</h4>
                    </div>
                    <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <!--navigation-->
                @include('dashboard.include.navigation')
                <!--end navigation-->
            </div>
            <!--end sidebar-wrapper-->
            <!--header-->
            @include('dashboard.include.header')
            <!--end header-->
            <!--page-wrapper-->
            @yield('content')
            <!--end page-wrapper-->
            <!--start overlay-->
            <div class="overlay toggle-btn-mobile"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <!--footer -->
            <div class="footer">
                <p class="mb-0"> Astratech {{ '@'.date('Y') }} | Developed By : <a href="https://astratech.info/" target="_blank">Astratech</a>
                </p>
            </div>
            <!-- end footer -->
        </div>
        <!-- end wrapper -->
        <!--start switcher-->
        <div class="switcher-wrapper">
            <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
            </div>
            <div class="switcher-body">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <hr/>
                <h6 class="mb-0">Theme Styles</h6>
                <hr/>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="darkmode">Dark Mode</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                        <label class="custom-control-label" for="lightmode">Light Mode</label>
                    </div>
                </div>
                <hr/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="DarkSidebar">
                    <label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
                </div>
                <hr/>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
                    <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
                </div>
            </div>
        </div>
        <!--end switcher-->
    </div>
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>

    <!-- Vector map JavaScript -->
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    {{--notification--}}
    <script src="{{ asset('assets/plugins/notifications/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/notifications/js/notifications.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- App JS -->
    <script src="{{ asset('assets/js/app.js?v=1.0.0.0.0.0.0') }}"></script>
    <script src="{{ asset('js/notify.js?v=1') }}"></script>
    <script src="{{ asset('js/prettify.js?v=1') }}"></script>
    <script>
        feather.replace()
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    let el=$(input).parent().parent().find('.avatar-preview div#imagePreview')
                    console.log(el)
                    el.css('background-image', 'url('+e.target.result +')');
                    el.hide();
                    el.fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).on('click','[for="imageUpload"]',function (){
            $(this).parent().find('input[type="file"]').trigger('click')
        })
        $(document).on('change','.imageUpload',function(){
            readURL(this);
        })
        $('.select2').each(function(){
            $(this).select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        })

        if($('.dashboard-social-list').length){
            new PerfectScrollbar('.dashboard-social-list');
        }
        if($('.dashboard-top-countries').length){
            new PerfectScrollbar('.dashboard-top-countries');
        }
        $.ajaxSetup({
            headers : {
                'X-CSRF-Token' : '{{ csrf_token() }}'
            }
        });

        const animateCSS = (element, animation, prefix = 'animate__') =>
            // We create a Promise and return it
            new Promise((resolve, reject) => {
                const animationName = `${prefix}${animation}`;
                const node = document.querySelector(element);
                node.classList.add(`${prefix}animated`, animationName);
                // When the animation ends, we clean the classes and resolve the Promise
                function handleAnimationEnd(event) {
                    event.stopPropagation();
                    node.classList.remove(`${prefix}animated`, animationName);
                    resolve('Animation ended');
                }
                node.addEventListener('animationend', handleAnimationEnd, {once: true});
            });
    </script>
    @include('sweetalert::alert')
@stack('footerScripts')
</body>
</html>
