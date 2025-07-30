@extends('layouts.main')
@section('title', 'Lander')
@section('content')
    @include('pages.lander._hero')
    @include('pages.lander._stats')
    @include('pages.lander._about')
@endsection