<!doctype html>
<html lang="en">


@include('partials._header')

    @include('partials.app._navbar')

<body>
    <div class="container p-5 ">

        @yield('container')

    </div>

</body>

@include('partials._scripts')

</html>