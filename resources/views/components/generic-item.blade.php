<div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600">
    <div class="w-full h-full absolute top-0 left-0">
        <div class="w-full h-full items-center align-middle justify-center flex">
            <img src="{{ asset( $data['images'][0] ?? 'img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover">
        </div>
    </div>
    <div class="w-full h-40 absolute flex bottom-0 left-0 rounded-tr-3xl z-20 bg-blue-900 pr-2 pt-2">
        <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-3xl grid grid-cols-2">
            <div class="h-full bg-stone-900 items-center justify-center">
                <div class="h-full max-h-full w-11/12 text-center">
                    <div class="text-slate-100 text-nm font-semibold text-ellipsis">Property Name</div>
                    <div class="text-slate-200 italic text-sm line-clamp-3">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each</div>
                </div>
            </div>
            <div class="h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-2xl">
                <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                    <a href="{{ url('propertyDetails/'.($data['id'] ?? '')) }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                    <a href="{{ url('bookVisit/'.($data['id'] ?? '')) }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>