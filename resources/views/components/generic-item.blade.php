<div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600 border border-slate-600">
    <div class="w-full h-full absolute top-0 left-0">
        <div class="w-full h-full align-top justify-center flex relative">
            <div class="text-slate-100 text-nm absolute w-1/2 mx-auto top-0 bg-black text-center py-1 rounded-b-3xl border-4 border-double border-t-0 border-white"> {{ $data['price'] }} </div>
            <img src="{{ $data['images'][0] }}" class="w-full h-auto max-h-full object-top overflow-hidden object-cover">
        </div>
    </div>
    <div class="w-full h-44 absolute bottom-0 left-0 rounded-tr-3xl z-20 bg-blue-900 pr-2 pt-2">
        <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-3xl grid grid-cols-2">
            <div class="h-full bg-stone-900 text-center justify-center px-1">
                <div class="w-full text-slate-100 text-nm font-semibold text-ellipsis "> {{ $data['name'] }} </div>
                <div class="w-full text-slate-100 text-lg text-center line-clamp-4 whitespace-pre-wrap"> {{ $data['description'] }} </div>
                
            </div>
            <div class="h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-2xl">
                <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                    <a href="{{ url('propertyDetails/'.$data['id']) }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                    <a href="{{ url('bookVisit/'.$data['id']) }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>