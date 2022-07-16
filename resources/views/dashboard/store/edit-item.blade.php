@extends('dashboard.store.template')
@section('store')
<div class="w-full h-full flex flex-col justify-center">
    <div class="w-full md:w-2/3 mx-auto h-auto bg-white bg-opacity-10 rounded-xl py-5 px-5">
        <div class="text-center text-d text-large font-black w-full py-4">Edit Item</div>
        <form action="" method="post" class="w-full rounded">
            <div class="w-full relative">
                <label for="" class="absolute text-small text-s">name:</label>
                <input type="text" name="name" id="" class="w-full px-2 py-2 mt-2 bg-transparent border-0 border-b border-s text-d text-medium">
            </div>
            <div class="w-full relative">
                <label for="" class="absolute text-small text-s">category:</label>
                <input type="text" name="category" id="" class="w-full px-2 py-2 mt-2 bg-transparent border-0 border-b border-s text-d text-medium">
            </div>
            <div class="w-full relative">
                <label for="" class="absolute text-small text-s">description(precise):</label>
                <input type="text" name="description" id="" class="w-full px-2 py-2 mt-2 bg-transparent border-0 border-b border-s text-d text-medium">
            </div>
            <div class="w-full relative">
                <label for="" class="absolute text-small text-s">text *:</label>
                <textarea rows="3" name="text" id="" class="mini-scrollbar w-full px-2 py-2 mt-2 bg-transparent border-0 border-b border-s text-d text-medium"></textarea>
            </div>
            <div class="w-full flex justify-end">
                <input type="submit" name="name" class=" rounded px-4 py-1 my-2 bg-white bg-opacity-25 border-0 text-d text-medium" value="submit">
            </div>
        </form>
    </div>
</div>
@endsection
