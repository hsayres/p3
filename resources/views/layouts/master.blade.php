<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'p3')</title>
    <meta charset='utf-8'>
    <link href='/css/billsplitter.css' type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    @stack('head')
</head>
<body>

<header>
    @include('modules.nav')
</header>

<section>
    @yield('content')
</section>

<footer>
    <a href='http://github.com/hsayres/p3'><i class='fa fa-github'></i> View on Github</a>
</footer>


@stack('body')

</body>
</html>