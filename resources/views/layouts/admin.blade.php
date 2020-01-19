<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $tenant->name }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('_dist/admin/css/themes/lite-purple.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('_dist/admin/css/plugins/perfect-scrollbar.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    @stack('styles')
    @notify_css
    <!-- Styles -->
</head>
<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">

    @include("admin.includes.main-header")
    @include("admin.includes.sidebar")
    <!-- =============== Left side End ================-->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <!-- ============ Body content start ============= -->
        <div class="main-content">
            @yield('breadcrumb')
            <div class="separator-breadcrumb border-top"></div>
        @yield('content')
            <!-- end of main-content -->
        </div><!-- Footer Start -->
        <div class="flex-grow-1"></div>
        <!-- fotter end -->
        <div class="app-footer">
            <div class="row">
                <div class="col-md-9">
                    <p><strong>{{ config('agency.name') }} - {{ config('agency.subtitle') }}</strong></p>
                    <p>{{ config('agency.description') }}
                        <sunt></sunt>
                    </p>
                </div>
            </div>
            <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                <a class="btn btn-primary text-white btn-rounded" href="//{{ config('agency.site') }}" target="_blank">{{ config('agency.site') }}</a>
                <span class="flex-grow-1"></span>
                <div class="d-flex align-items-center">
                    <img class="logo" src="{{ asset($tenant->cover ) }}" alt="">
                    <div>
                        <p class="m-0">&copy; {{ config('agency.foundation') }} Gull HTML</p>
                        <p class="m-0">{{ __('All rights reserved') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- fotter end -->
    </div>
</div>
<!-- ============ Search UI Start ============= -->
@include("admin.includes.form-logout")
<script src="{{ asset('_dist/admin/js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('_dist/admin/js/plugins/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('_dist/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('_dist/admin/js/scripts/script.min.js') }}"></script>
<script src="{{ asset('_dist/admin/js/scripts/sidebar.large.script.min.js') }}"></script>
<script src="{{ asset('_dist/admin/js/plugins/tagging.min.js') }}"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@notify_js
@notify_render
@stack('scripts')
</body>
</html>
