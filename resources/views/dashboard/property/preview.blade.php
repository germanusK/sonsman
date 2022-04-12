@extends('dashboard.main')
@section('content')
<div class="w-full h-full py-4 flex flex-col">
    <div class="w-full py-2 px-4 flex items-end justify-end">
        <a href="{{url('/rest/property')}}" ><span class="text-white text-xl font-bold fas fa-times hover:text-red-400" title="close"></span></a>
    </div>
    <div class="flex-auto w-full flex items-center justify-center align-middle py-8">
        <div class="w-full flex flex-wrap items-start justify-center">
            <div class="px-4 w-full flex whitespace-nowrap overflow-x-scroll no-scrollbar items-center justify-center py-2 bg-black bg-opacity-20 border border-white">
                @foreach($data['images'] as $key=>$value)
                    <img src="{{$value}}" alt="" class="w-auto rounded-xl h-36 mx-3 my-2 border-x border-gray-800">
                @endforeach
            </div>
            <div class="px-6 mx-1 py-2 flex-auto mb-4 overflow-y-scroll no-scrollbar">
                @foreach($data as $key=>$value)
                    @if('id' != $key && 'images' != $key)
                        <div class="py-1 flex flex-wrap border-b border-black border-opacity-10"><span class="text-base text-slate-200 sm:w-1/3 capitalize">{{$key}}</span><span class="sm:w-1/2 block font-semibold text-white pl-2">{{ $value}}</span></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection