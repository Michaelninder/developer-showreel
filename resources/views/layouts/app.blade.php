<html lang="en" data-theme="{{ session('theme', 'dark') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Showreel') - fabiantrernis.dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll-to-top.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site-loader.css') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet"/>

    @stack('styles')
</head>
<body>
    <div id="site-loader">
        <div class="spinner"></div>
    </div>

    @yield('layout-content')

    <script src="{{ asset('js/site-loader.js') }}" defer></script>
    <script src="{{ asset('js/scroll-to-top.js') }}" defer></script>

    @stack('scripts')
</body>
</html>