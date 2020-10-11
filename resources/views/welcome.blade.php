@extends('layouts.layout')

@section('content')
<div class="flex h-full">
    <div class="pilar border-gray-600">
        @include('sidebar-links')
    </div>
    <div class="pilar border-gray-600">
        @include('main-content', ['tweets' => $tweets])
    </div>
    <div class="pilar border-gray-600">
        @include('following')
    </div>
</div>
@endsection
