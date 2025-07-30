@php
$links = [
    'pages.lander' => 'lander',
    'test' => 'test',
];
@endphp

<div class="navbar">
    <ul>
        @if ($links)
        @foreach ($links as $route => $name)
        <li class="nav-item{{ $route === Route::currentRouteName() ? ' active' : '' }}"><a href="{{ route($route) }}" class="nav-link{{ $route === Route::currentRouteName() ? ' active' : '' }}">{{ __('nav.'.$name) }}</a></li>
        @endforeach
        @else
        <div class="nav-error">No Nav-Links avaible</div>
        @endif
    </ul>
</div>


