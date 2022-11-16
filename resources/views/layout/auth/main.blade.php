@extends('layout.auth.base')

@section('head')
    @yield('title')
@endsection

@section('body')
    <body class="login">
        @yield('content')
        <!-- BEGIN: JS Assets-->
        @vite('resources/js/app.js')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <!-- END: JS Assets-->
        @yield('script')
    </body>
@endsection
