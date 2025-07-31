@extends('layouts.app')
@section('layout-content')
@include('components.cursor')
@include('components.navbar')
    <div>
        @yield('content')
    </div>
    @include('components.footer')

    @include('components.scroll-to-top')
    @include('components.social-bar')
@endsection