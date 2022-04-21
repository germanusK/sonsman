@extends('dashboard.main')
@section('content')
    <div class="w-full h-full py-2">
       
        <div class="w-full items-end justify-end flex flex-wrap py-6 gap-4">
            <a type="button" id="newGroupBtn" id="" title="new group" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-plus"></span></a>
            <a type="button" id="newCategoryBtn" title="new category" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-plus"></span></a>
            <a type="button" id="newGradeBtn" title="new grade" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-plus"></span></a>
            <a type="button" title="new asset" href="{{url('/rest/property/create')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-plus"></span></a>
            <div class="flex align-middle items-center py-1 bg-white bg-opacity-20 rounded">
                <label for="group" class="px-2 mr-2 text-sm text-slate-200"><span class="fas fa-filter">:</span></label>
                <select name="filterOption" onchange="filterList()" class="flex rounded bg-white bg-opacity-10" id="propertyFilter">
                    <option value="ALL">All</option>
                    <option value="RE">Real estate</option>
                    <option value="GC">Genaral commerce</option>
                    <option value="CONST">General Construction</option>
                    <option value="ARCH">Architecture design</option>
                </select>
            </div>
        </div>
        <div class="w-full justify-center items-center flex py-6"></div>
        
        <!-- property list -->
        <div class="h-96 w-full mb-3 overflow-y-scroll no-scrollbar">
            <!-- property item -->
            @if(!isset($data) || count($data)<=0)
            <!-- list heading -->
            <div class="flex w-full break-words py-1 text-center mt-4 border-y text-slate-100 border-slate-100 align-middle items-stretch justify-between text-xl">
                No Data available yet. Consider uploading some property
            </div>   
            @else
            <!-- list heading -->
            <div class="flex w-full py-1 mt-4 border-y  border-slate-100 align-middle items-stretch justify-between text-xl">
                <div class="w-8 h-8 rounded mx-3"></div>
                <div class="  ml-3 px-3 flex-1 font-bold text-slate-50 capitalize">Name</div>
                <div class="  ml-3 px-3 flex-1 font-bold text-slate-50 capitalize">Price</div>
                <div class="  ml-3 px-3 w-80 line-clamp-2 text font-bold text-slate-50 hidden md:flex">Description</div>
                <div class="  ml-3 px-3 flex flex-1 font-bold text-slate-50 justify-end items-end">Actions</div>
            </div>
            @foreach($data as $key=>$value)
            <div class="flex w-full py-1 border-y mb-1 border-white border-opacity-10 align-middle items-stretch justify-between">
                <div class="w-8 h-8 rounded mx-3">@if(isset($value['images']) && count($value['images'])>0)<img src=" {{ $value['images'][0] }} " alt="" class="w-full h-full rounded">@endif</div>
                <div class=" border-l border-l-stone-400 border-dotted ml-3 px-3 flex-1 text-base font-semibold text-slate-200 capitalize">@if(isset($value['name'])) {{ $value['name'] }} @endif</div>
                <div class=" border-l border-l-stone-400 border-dotted ml-3 px-3 flex-1 text-base text-slate-200">@if(isset($value['price'])) {{ $value['price'] }} @endif</div>
                <div class=" border-l border-l-stone-400 border-dotted ml-3 px-3 w-80 line-clamp-2 text text-base text-slate-200 hidden md:flex"><span>@if(isset($value['description'])) {{ $value['description'] }} @endif</span> </div>
                <div class=" border-l border-l-stone-400 border-dotted ml-3 px-3 flex flex-1 text-base font-semibold justify-end items-start">
                    <a href=" {{ url('/rest/property/preview/'.$value['id']) }} "><span title="preview" class="text-base text-slate-100 mx-2 fas fa-eye"></span></a>
                    <a href=" {{ url('/rest/property/edit/'.$value['id'])}} "><span title="edit" class="text-base text-slate-100 mx-2 fas fa-edit"></span></a>
                    <form action=" {{url('/rest/property/delete/'.$value['id'])}} " method="post">{{ csrf_field() }}<button type="submit"><span title="delete" class="text-base text-slate-100 mx-2 fas fa-trash"></span></button></form>
                </div>
            </div>
            @endforeach
               
            @endif    
        </div>
    </div>
@endsection