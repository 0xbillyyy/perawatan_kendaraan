<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIT - @yield("titlgit inite")</title>

    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        {{-- Sidebar --}}
        @include('layouts.sbadmin.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                {{-- Topbar --}}
                @include('layouts.sbadmin.topbar')

                {{-- Main Content --}}
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield("title")</h1>
                    </div>
                    @yield('content')
                </div>
            </div>

            {{-- Footer --}}
            @include('layouts.sbadmin.footer')
        </div>
    </div>

    {{-- JS --}}
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>
    @include('sweetalert::alert')

</body>
</html>
