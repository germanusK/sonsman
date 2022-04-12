@extends('dashboard.main')
@section('content')
<div class="w-full">
    <div class="w-full flex flex-wrap py-6 gap-4">
        <a type="button" href="{{url('/rest/property/create')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
    </div>
    <div class="flex align-middle items-center py-1 bg-white bg-opacity-20 rounded">
        <h3 class=" mx-auto text-xl font-semibold text-slate-200 px-4">Create Property</h3>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <form action="" method="post" class="rounded-md bg-white bg-opacity-10 py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30">
                <div class="w-full flex flex-wrap items-start justify-evenly">
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="name" class="text-white text-opacity-50 text-base">name:</label><br>
                        <input type="text" name="name" id="" placeholder="item name here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70">
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="group" class="text-white text-opacity-50 text-base">group:</label><br>
                        <select name="group" id="" class=" w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60">
                            <option value="" selected></option>
                            <option value="RE" class="text-slate-300">Real Estate</option>
                            <option value="GC" class="text-slate-300">General Commerce</option>
                            <option value="CONS" class="text-slate-300">General Construction</option>
                            <option value="ARCH" class="text-slate-300">Architecture design</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="category" class="text-white text-opacity-50 text-base">category:</label><br>
                        <select name="category" id="" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60">
                            <option value="" selected></option>
                            <option value="land" class="text-slate-300">Land</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="grade" class="text-white text-opacity-50 text-base">grade:</label><br>
                        <select name="grade" id="" placeholder="select grade" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70">
                            <option value="" selected>none</option>
                            <option value="4">High grade</option>
                            <option value="3">Trending/Latest</option>
                            <option value="2">Standard</option>
                            <option value="1">Simple</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="price" class="text-white text-opacity-50 text-base">price:</label><br>
                        <input type="text" name="price" id="" placeholder="w-full item price here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70">
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="description" class="text-white text-opacity-50 text-base">description:</label><br>
                        <textarea rows="4" name="description" id="" placeholder="item description here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70"></textarea>
                    </div>
                    
                </div>
                <hr class=" opacity-30 w-2/3 mx-auto">
                <div class="w-full items-end justify-end flex px-6">
                    <button type="submit" class="px-3 py-2 border-b border-white text-white rounded font-semibold">create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection