<!-- Your original main blade file -->
@php
    $links = [
        [
            'route' => 'pages.lander',
            'name' => 'lander',
            'icon' => 'bi bi-house-door-fill',
        ],
        [
            'route' => 'test',
            'name' => 'test',
            'icon' => 'bi bi-joystick',
        ],
    ];
    $currentTheme = session('theme', 'dark');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Site</title>
    <!-- Add this meta tag if you don't have it -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Include your CSS (e.g., Bootstrap Icons and your custom styles) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Basic example of theme application using data-theme attribute */
        html[data-theme='dark'] {
            background-color: #333;
            color: #eee;
        }
        html[data-theme='light'] {
            background-color: #eee;
            color: #333;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #444;
            padding: 10px;
        }
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-grow: 1;
        }
        .nav-item {
            margin-right: 15px;
        }
        .nav-link {
            color: white;
            text-decoration: none;
        }
        .nav-link.active {
            font-weight: bold;
            color: lightblue;
        }
        .nav-logo a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-right: 20px;
        }
        .theme-switcher-container {
            margin-left: auto; /* Push to the right */
        }
        .theme-switcher {
            background: none;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 1.5rem;
        }
        .nav-icon {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul class="flex-grow">
            <li class="nav-logo">
                <a href="{{ route('pages.lander') }}">fabianternis.dev</a>
            </li>
            @if ($links)
                @foreach ($links as $link)
                    <li
                        class="nav-item{{ $link['route'] === Route::currentRouteName() ? ' active' : '' }}"
                    >
                        <a
                            href="{{ route($link['route'], $link['params'] ?? []) }}"
                            class="nav-link{{ $link['route'] === Route::currentRouteName() ? ' active' : '' }}"
                        >
                            @if ($link['icon'])
                                <i class="nav-icon {{ $link['icon'] }}"></i>
                            @endif
                            <span class="nav-text">{{ __('nav.' . $link['name']) }}</span>
                        </a>
                    </li>
                @endforeach
            @else
                <div class="nav-error">No Nav-Links avaible</div>
            @endif
        </ul>
        @include('components.theme-switcher', ['currentTheme' => $currentTheme])
    </div>

    @stack('scripts')
</body>
</html>