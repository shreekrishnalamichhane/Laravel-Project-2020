<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    @include('partials_logged._head')
</head>
<body class="fixed-sn navy-blue-skin dark-bg-admin">

<header>

    @include('partials_logged._sidebar')
    @include('partials_logged._navbar')
</header>
<main>
    @yield('content')
</main>
    {{-- @include('partials_logged._footer') --}}
    @include('partials_logged._scripts')

</body>

</html>

