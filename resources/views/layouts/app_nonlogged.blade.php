<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    @include('partials_nonlogged._head')
</head>
<body>
    @include('partials_nonlogged._navbar')
    @yield('content')
    {{-- @include('partials._footer') --}}
    @include('partials_nonlogged._scripts')
</body>

</html>

