@extends('layouts.app')
@section('layout-content')
    @include('components.navbar')
    <div>
        @yield('content')
    </div>
    @include('components.footer')
@endsection