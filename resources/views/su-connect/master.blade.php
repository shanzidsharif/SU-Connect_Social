<!Doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    @include('admin.include.style')
</head>

<body data-sidebar="dark">

    <div class="main-content">

        @yield('content')

    </div>

<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
@include('admin.include.script')

</body>

</html>
