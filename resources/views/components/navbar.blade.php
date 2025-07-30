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
    [
        'route' => 'github.user',
        'params' => ['username' => 'fabianternis'],
        'name' => 'github',
        'icon' => 'bi bi-github',
    ],
    [
        'route' => 'discord.login',
        'name' => 'discord',
        'icon' => 'bi bi-discord',
    ]
];
$currentTheme = session('theme', 'dark');
@endphp

<div class="navbar">
    <ul class="flex-grow">
        @if ($links)
        @foreach ($links as $link)
        <li class="nav-item{{ $link['route'] === Route::currentRouteName() ? ' active' : '' }}">
            <a href="{{ route($link['route'], $link['params'] ?? []) }}" class="nav-link{{ $link['route'] === Route::currentRouteName() ? ' active' : '' }}">
                @if($link['icon'])
                    <i class="nav-icon {{ $link['icon'] }}"></i>
                @endif
                <span class="nav-text">{{ __('nav.'.$link['name']) }}</span>
            </a>
        </li>
        @endforeach
        @else
        <div class="nav-error">No Nav-Links avaible</div>
        @endif
    </ul>
    <div class="theme-switcher-container">
        <form id="theme-switch-form" action="{{ route('theme.switch') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <button id="theme-toggle" type="button" class="theme-switcher" onclick="document.getElementById('theme-switch-form').submit();">
            <i class="bi {{ $currentTheme === 'dark' ? 'bi-moon-stars-fill' : 'bi-sun-fill' }}"></i>
        </button>
    </div>
</div>