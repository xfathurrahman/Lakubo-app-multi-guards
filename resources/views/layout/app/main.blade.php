@extends('../layout/app/base')

@section('body')
    <body id="main-app">
        <nav class="bg-white shadow py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            @include('layout.App.components.navbar')
        </nav>

        <div class="container mx-auto mt-20 xl:px-32">
            @yield('content')
        </div>

        <footer class="bg-white dark:bg-gray-900 bottom-0 w-full">
            @include('layout.App.components.footer')
        </footer>

        <script type="text/javascript" src="{{ asset('js/jquery-3.6.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/flowbite.js') }}"></script>
        @yield('script')
    </body>

@endsection
