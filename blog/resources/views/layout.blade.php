<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    @section('sidebar')
        <strong>This is master sidebar</strong>
    @show

<br/>

    @yield('content')
</div>
</body>
</html>