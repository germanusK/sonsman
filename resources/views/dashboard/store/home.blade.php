@extends('dashboard.store.template')
@section('store')
<div class="md:flex w-full py-3 h-full">
        <div class="md:w-2/3 lg:max-h-full lg:overflow-y-scroll mini-scrollbar divide-y divide-white divide-opacity-25">
            @for($i=0; $i < 100; $i++)
                <!-- item -->
                <div class="w-full p-2 shadow-2xl flex text-md text-d justify-between">
                    <span class="hidden md:block w-8 text-center">{{$i}}</span>
                    <span class="w-auto text-ellipsis">{{'name of item '.$i.' here'}}</span>
                    <span class=" space-x-2 text-s">
                        <a href="" class="fas fa-eye" title="preview"></a>
                        <a href="" class="fas fa-trash" title="delete"></a>
                    </span>
                </div>
            @endfor
        </div>
        <div class="md:w-1/3 lg:max-h-full lg:overflow-y-scroll mini-scrollbar space-y-2 bg-p px-1 py-2 rounded">
            @for($i=0; $i < 35; $i++)
                <div class="py-1 text-d font-semibold bg-white bg-opacity-25 rounded text-center">
                    <div>{{"name of trending item-".$i." here"}}</div>
                    <div class="flex justify-center space-x-3 text-small font-semibold">
                        <span class="px-1 text-d fas fa-thumbs-up border rounded" title="likes"> 231</span>
                        <span class="px-1 text-s fas fa-eye border rounded" title="views"> 456 </span>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
