@extends('templates.main-page')
@section('page')
<div class="w-full top-0 absolute flex justify-center py-4 px-2 text-xlarge text-s">
    <a href="{{url('/home')}}" class="px-3 border-x border-s bg-p rounded-md fas fa-home"></a>
</div>
<div class="w-full min-h-screen flex auth-bg">
    <div class="w-full md:w-7/12 py-12">
        @yield('auth-form')
    </div>
    <div class="w-5/12 min-h-full hidden md:block">
        @yield('auth-bg')
    </div>
</div>
@endsection
