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
            'route' => 'test2',
            'name' => 'test2',
            'icon' => 'bi bi-joystick',
        ],
        [
            'route' => 'test3',
            'name' => 'test3',
            'icon' => 'bi bi-joystick',
        ],
        [
            'route' => 'test4',
            'name' => 'test4',
            'icon' => 'bi bi-joystick',
        ],/*
        [
            'route' => 'test5',
            'name' => 'test5',
            'icon' => 'bi bi-joystick',
        ],
        [
            'route' => 'test6',
            'name' => 'test6',
            'icon' => 'bi bi-joystick',
        ],
        [
            'route' => 'test7',
            'name' => 'test',
            'icon' => 'bi bi-joystick',
        ],
        [
            'route' => 'test8',
            'name' => 'test',
            'icon' => 'bi bi-joystick',
        ],
        [
            'route' => 'test9',
            'name' => 'test',
            'icon' => 'bi bi-joystick',
        ],*/
    ];

@endphp

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
    <div class="flex items-center">
        @guest
            <button data-modal-target="login-modal" class="mr-2 rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Login</button>
            <button data-modal-target="registration-modal" class="rounded-lg bg-green-500 px-4 py-2 text-white hover:bg-green-600">Register</button>
        @endguest
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600">Logout</button>
            </form>
        @endauth
    </div>
    @include('components.theme-switcher')
</div>