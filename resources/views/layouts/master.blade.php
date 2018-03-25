<!doctype html>
<html>
<head>
    <title>@yield('title', 'p3')</title>
    <meta charset='utf-8'>
    <link href='/css/p3.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>
    <a href='/'><img src='/images/billsplitter.png' id='logo' alt='Bill Splitter Logo'></a>
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
    <a href='http://github.com/hsayres/p3'>View on Github</a>
</footer>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

@stack('body')

</body>
</html>