<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
<div class="container">
    <header class="row">
        @include('header')
    </header>
    <div id="main" class="row">
       @yield('content')
    </div>
</div>
</body>
</html>