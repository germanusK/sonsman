@extends('templates.main-page')
@section('page')
<div class="w-full lg:h-screen bg-d flex items-center">
    <div class="w-11/12 py-2 bg-p h-full mx-auto px-2">
        <div class="w-full border-b border-s flex justify-around align-middle items-center section1">
            <div class="flex-auto"><img src="{{asset('img/logo.png')}}" alt="" class=" w-7 h-7 border border-d rounded mx-4 bg-d"></div>
            <div class="flex justify-end gap-x-2 text-medium text-s font-semibold">
                <button class="px-4" id="theme-switch" title="change theme"><span class="fas fa-adjust"></span></button>
                <a href="" class="px-4 relative" title="notifications">
                    <span class="text-small text-d w-full text-center -top-0 absolute block" id="notifications">5</span>
                    <span class="fas fa-bell w-full block"></span>
                </a>
                <a href="" class="px-4 relative" title="messaages">
                    <span class="text-small text-d w-full text-center -top-0 absolute block" id="messaages">5</span>
                    <span class="fas fa-envelope w-full block"></span>
                </a>
                <a href="" class="px-4" title="user profile">
                    <span class="fas fa-user"></span>
                </a>
            </div>
        </div>
        <div class="w-full lg:flex gap-1 section2">
            <div class="w-full flex justify-between align-middle items-center lg:block lg:w-1/4 lg:h-full border-b border-d py-1 lg:py-4 bg-white bg-opacity-5 lg:overflow-y-scroll mini-scrollbar relative">
                <div class="lg:w-full text-large text-s text-center uppercase py-2 font-black">Sonsman</div>
                <div class="lg:w-full text-medium text-center text-d font-semibold gap-3 hidden absolute top-0 right-12 md:static w-3/4 md:w-auto divide-y md:divide-y-0 lg:divide-y divide-slate-700 divide-opacity-20 mx-auto bg-p md:bg-transparent md:block space" id="dashnav">
                    <a href="{{route('dashboard')}}" class="block md:inline lg:block w-full capitalize py-1 md:py-0 lg:py-2 px-3">Dashboard</a>
                    <a href="{{route('stores')}}" class="block md:inline lg:block w-full capitalize py-1 md:py-0 lg:py-2 px-3">store</a>
                    <a href="" class="block md:inline lg:block w-full capitalize py-1 md:py-0 lg:py-2 px-3">customers</a>
                    <a href="" class="block md:inline lg:block w-full capitalize py-1 md:py-0 lg:py-2 px-3">settings</a>
                    <a href="" class="block md:inline lg:block w-full capitalize py-1 md:py-0 lg:py-2 px-3">messages</a>
                </div>
                <button class="text-large text-d font-black md:hidden mx-2" onclick="toggle_nav()"><span class="fas fa-bars"></span></button>
            </div>
            <div class="w-full lg:w-3/4 lg:h-full lg:overflow-y-scroll mini-scrollbar bg-slate-800 bg-opacity-20 ">
                @yield('custom-content')
            </div>
        </div>
    </div>
    <script>
        function toggle_nav() {
            document.querySelector('#dashnav').classList.toggle('hidden');
        }
    </script>
</div>
@endsection
