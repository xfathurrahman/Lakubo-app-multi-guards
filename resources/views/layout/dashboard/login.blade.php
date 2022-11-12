@extends('../layout/dashboard/base')

@section('body')
    <body class="login">
        @yield('content')
        @include('../layout/dashboard/components/dark-mode-switcher')
        @include('../layout/dashboard/components/main-color-switcher')

        <!-- BEGIN: JS Assets-->
        @vite('resources/js/app.js')
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
