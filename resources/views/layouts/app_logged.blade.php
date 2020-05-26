<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    @include('partials_logged._head')
    @yield('additional_stylesheet')
</head>
<body class="fixed-sn navy-blue-skin dark-bg-admin" >
<header>

    @include('partials_logged._sidebar')
    @include('partials_logged._navbar')
</header>
<main style="margin-right:20px;">
    @include('partials_logged._message')
    @yield('content')
</main>
    {{-- @include('partials_logged._footer') --}}
    @include('partials_logged._scripts')
    @yield('additional_scripts')

</body>

</html>

