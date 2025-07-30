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
    @include('components.theme-switcher')
</div>