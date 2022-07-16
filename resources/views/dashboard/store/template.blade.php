@extends('dashboard.template')
@section('custom-content')
<div class="w-full h-full px-2">
    <div class="w-full lg:h-1/6">
        <div class="w-full whitespace-nowrap overflow-x-scroll mini-scrollbar pl-2">
            <div class="w-fit flex mx-2">
                @for($i = 0; $i <= 10; $i++)
                <a href="" class="text-s my-1 mx-2 px-1 rounded border border-s text-large bg-p">store {{$i}}</a>
                @endfor
                <a href="" class="text-s my-1 mx-2 px-1 rounded border border-d text-large border-p" title="new store"><span class="fas fa-plus"></span></a>
            </div>
        </div>
        <div class="flex justify-between px-3 space-x-5 py-2 text-d text-medium">
            <span class="font-black">45 items</span>
            <div class="flex space-x-5">
                <a href="" title="new item"><span class="fas fa-plus"></span></a>
                <a href="" title="edit store"><span class="fas fa-edit"></span></a>
            </div>
        </div>
    </div>
    <div class="w-full lg:h-5/6">
        @yield('store')
    </div>
</div>
@endsection
