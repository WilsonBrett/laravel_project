@extends('layout')

@section('content')
    @include('dashboard.dashboard_header')
    <div class="container">
        <div class="row">
            @include('dashboard.dashboard_left_nav')
            @yield('dashboard_content')
        </div>
    </div>
@stop
