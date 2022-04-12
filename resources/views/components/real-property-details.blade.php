<div class="bg-stone-200">
    <div class="w-11/12 md:w-5/6 mx-auto flex flex-wrap align-middle items-center">
        <div class="w-5/6 md:w-2/3 h-full my-12 px-2 py-4 shadow-2xl rounded-2xl">
            <div class="w-full  shadow-lg bg-stone-200 p-2 rounded-2xl">
                <img src=" {{ $data['images'][0] }} " alt="" class="w-full h-auto rounded-2xl">
            </div>
            <div class="flex flex-wrap justify-center items-center gap-2">
                @foreach($data['images'] as $value)
                    <button class="w-16 h-16">
                        <img src="{{ $value }}" alt="" class="w-full h-full">
                    </button>
                @endforeach
            </div>
        </div>
        <div class="w-3/4 md:w-1/3 h-full flex align-middle items-center justify-center my-12 px-2 py-4 overflow-y-scroll no-scrollbar">
            <div class="h-fit mx-auto">
                @foreach($data as $key=>$value)
                    @if('images'==$key || 'id'==$key)
                        @continue
                    @endif
                    <div class="py-3 border-y border-y-stone-600 my-2 text-center items-center justify-center">
                        <label for="" class="text-blue-500 italic font-medium capitalize">{{ $key }}</label>
                        <div class="text-black text-xl font-semibold"> {{ $value }} </div>
                    </div>
                @endforeach

                <div class="py-8 w-full flex items-center justify-center">
                    <a href="{{ url('/bookVisit/'.$data['id']) }}" class="py-2 px-5 text-lg font-semibold rounded border border-stone-300 text-stone-100 bg-stone-600">Book visit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-black py-12">
    <div class="w-11/12 md:w-5/6 mx-auto">
        <div class="text-center py-3 text-white text-2xl font-semibold capitalize">You may also be interested in:</div>
        <div class="sm:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if(isset($related))
                @foreach($related as $key=>$value)
                    <x-generic-item2 :data="$value"/>
                @endforeach
            @endif
        </div>
    </div>
</div>