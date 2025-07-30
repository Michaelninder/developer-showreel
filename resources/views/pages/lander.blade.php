@extends('layouts.main')
@section('title', 'Lander')
@section('content')
<div>
    @include('pages.lander._hero')
    @include('pages.lander._stats')
</div>
@endsection