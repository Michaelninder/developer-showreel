<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Showreel') - fabiantrernis.dev</title>
    <script>
        (function() {
            const html = document.documentElement;
            const theme = '{{ session('theme', 'system') }}';
            html.setAttribute('data-theme-mode', theme);

            if (theme === 'system') {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                html.classList.toggle('dark', prefersDark);
                html.setAttribute('data-theme', prefersDark ? 'dark' : 'light');
            } else {
                const isDark = theme === 'dark';
                html.classList.toggle('dark', isDark);
                html.setAttribute('data-theme', theme);
            }
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <div id="site-loader">
        <div class="spinner"></div>
    </div>

    @yield('layout-content')

    @stack('scripts')
</body>
</html>