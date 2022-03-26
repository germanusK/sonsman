<div class="w-full h-auto bg-white text-blue-800">
    <div class="h-full w-11/12 flex align-middle items-center mx-auto">
        <div class=" h-auto w-fit px-16 xs:block justify-center text-2xl italic font-semibomd">
            <img src="{{ asset('img/logo1.jpg') }}" alt="LOGO" class="w-12 h-auto">
        </div> 
        <div class=" h-fit w-fit inline-block md:flex flex-wrap justify-end text-lg  font-normal flex-auto gap-x-2 gap-y-2 divide-blue-600 bg-transparent">
            <a href="{{ url('/') }}" class="block lg:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Home</a>
            <a href="{{ url('/property') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Our Property</a>
            <a href="{{ url('/market') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">G-Market</a>
            <a href="{{ url('/about') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">About</a>
            <button class="block md:inline-flex no-underline px-2 mx-2 my-2 rounded-3xl border-2 border-blue-800 h-fit md:bg-transparent">search</button>
            </div>
    </div>
</div>

<div class="w-full min-h-screen relative ">
    <div class="w-1/2 h-1/2  align-bottom items-end justify-end flex absolute bottom-0 left-0 px-2 py-2 bg-stone-900">
        <div class="w-fit mx-auto">
            <div class="text-center py-4">
                <div class="py-2 text-white text-3xl md:text-4xl font-semibold italic text-ellipsis flex-wrap">Welcome To <span class="text-pink-700">Property Trust</span></div>
                <div class="text-2xl text-slate-200 italic text-center flex-wrap">Where real property comes home</div>
            </div>
            <div class="w-full flex items-center justify-center py-4">
                <div class="grid sm:grid-cols-2 gap-5 text-xl font-semibold">
                    <a href="" class=" inline-flex flex-auto sm:inline-block px-5 py-2 rounded text-center text-ellipsis w-auto bg-white text-blue-800 ">View Property</a>
                    <a href="" class=" inline-flex flex-auto sm:inline-block px-5 py-2 rounded text-center text-ellipsis w-auto bg-white text-blue-800">Real Market</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-1/2 h-full right-0 bottom-0 left-auto absolute bg-slate-300 z-0 align-bottom items-end justify-end flex py-2">
        <div class="w-4/5 mx-auto h-1/2 flex align-middle items-center justify-center text-center text-ellipsis line-clamp-3 text-4xl font-semibold">
            Don't wait to buy real estate, Buy real estate and wait
        </div>
    </div>
    <div class="w-11/12 h-3/5 absolute top-0 left-0 right-auto rounded-br-full z-10 bg-white pb-2 pr-2">
        <div class="w-full h-full rounded-br-full border-b-8 border-r-8 border-stone-900 bg-stone-900 items-center align-middle justify-center flex">
            <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover rounded-br-full">
        </div>
    </div>
    <div class="w-2/5 absolute flex top-0 right-0 border-b-8 border-l-8 rounded-bl-full border-white z-20 bg-stone-900 justify-center items-center align-middle flex-wrap pl-4">
        <div class=" h-auto rounded-t-full mx-4 my-2 justify-center items-center">
            <img src="{{ asset('img/logo1.jpg') }}" class="w-12 h-12 rounded-t-full mx-auto">
            <p class="text-center text-sm text-slate-100">where real property comes home</p>
        </div>
        <a href="{{ url('') }}" class="mx-4"><span class="text-4xl font-semibold text-slate-200 fas fa-home"></span></a>
    </div>
</div>