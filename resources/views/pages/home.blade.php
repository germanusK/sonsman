@extends('templates.page-template')
@section('page-content')
<div class="w-full py-1">
    <div class="w-11/12 mx-auto py-1 flex h-fit items-center align-middle">
        <div class="w-7/12 px-4 flex items-center justify-center align-middle h-fit">
            <img src="{{asset('img/bgcode.png')}}" alt="" class="w-96 max-w-full my-8 mx-4 block">
        </div>
        <div class="w-5/12 px-3 flex items-center tracking-widest leading-relaxed align-middle justify-center h-full text-4xl text-red-500 font-semibold font-sans">
            Join us where real things are happening
        </div>
    </div>
    <div class="w-11/12 mx-auto py-10 my-1 md:flex items-center align-middle">
        <div class="md:w-5/12 text-center text-4xl text-blue-500 font-semibold">What we do</div>
        <div class="md:w-7/12 sm:flex flex-wrap justify-between">
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center border border-blue-200 hover:border-blue-500 rounded-xl">
                <span class="fas fa-code text-5xl font-black text-red-500"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-blue-500 font-semibold mx-auto capitalize">Web & Mobile development</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center border border-blue-200 hover:border-blue-500 rounded-xl">
                <span class="fab fa-deviantart text-5xl font-black text-red-500"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-blue-500 font-semibold mx-auto">Web Design</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center border border-blue-200 hover:border-blue-500 rounded-xl">
                <span class="fas fa-dice text-5xl font-black text-red-500"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-blue-500 font-semibold mx-auto">Graphics Design</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center border border-blue-200 hover:border-blue-500 rounded-xl">
                <span class="fas fa-laugh-beam text-5xl font-black text-red-500"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-blue-500 font-semibold mx-auto">Sonsman Quotes</div>
            </div>
        </div>
    </div>
    <div class="w-full bg-blue-800 bg-opacity-90 bgd1 py-1">
        <div class="w-11/12 mx-auto my-12 px-10  md:h-96 relative">
            <div class="w-fit px-3 py-2 md:absolute left-10 top-1/4 text-white italic text-3xl max-w-xs">Its better when it talks than quiet </div>
            <div class="w-fit px-3 py-2 md:absolute right-10 top-10 text-white italic text-3xl max-w-xs">when your thought changes into uptimized designs</div>
            <div class="w-fit px-3 py-2 md:absolute left-1/4 bottom-1/3 text-white italic text-3xl max-w-xs">Trying to give my app a sense of perception</div>
            <div class="w-fit px-3 py-2 md:absolute left-2/4 bottom-0 text-white italic text-3xl max-w-xs">Do you need a logo that talks?</div>
        </div>
    </div>
    <div class="w-11/12 mx-auto py-8">
        <div class="w-full flex items-end justify-end text-4xl text-blue-500 font-semibold">Sonsman accepts it this way</div>
        <div class="w-full sm:flex flex-wrap justify-around py-4">
            <div class="w-1/2 md:w-1/4 mx-auto my-5 p-2 text-center text-4xl font-bold hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-blue-300 flex items-center align-middle">access s-quote services</div>
            </div>
            <div class="w-1/2 md:w-1/4 mx-auto my-5 p-2 text-center text-4xl font-bold hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-blue-300 flex items-center align-middle">Web development services</div>
            </div>
            <div class="w-1/2 md:w-1/4 mx-auto my-5 p-2 text-center text-4xl font-bold hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-blue-300 flex items-center align-middle">Graphics design services</div>
            </div>
        </div>
    </div>
    <div class="w-11/12 mx-auto py-12 my-8 h-fit rounded-r-full rounded-l-full bg-white">
        <div class="w-1/2 mx-auto h-96 py-2 rounded-l-full rounded-r-full shadow-2xl shadow-red-500 bg-white relative flex align-middle items-center justify-center">
            <div class="text-blue-500 rounded-full text-4xl font-black text-center">Who benefits</div>
            <p class="sm:w-1/2 absolute bottom-3/4 right-3/4 text-2xl text-blue-500 font-semibold capitalize py-4 px-6 rounded-r-full rounded-l-full bg-white shadow-xl shadow-red-500 text-center">Business & Institution owners</p>
            <p class="sm:w-1/2 absolute top-3/4 right-3/4 text-2xl text-blue-500 font-semibold capitalize py-4 px-6 rounded-r-full rounded-l-full bg-white shadow-xl shadow-red-500 text-center">Software project managers</p>
            <p class="sm:w-1/2 absolute bottom-3/4 left-3/4 text-2xl text-blue-500 font-semibold capitalize py-4 px-6 rounded-r-full rounded-l-full bg-white shadow-xl shadow-red-500 text-center">Quote lovers and users</p>
        </div>
    </div>
    <div class="w-full py-12">
        <div class="w-11/12 mx-auto md:h-96 flex flex-col items-center align-middle justify-center">
            <div class="w-full text-center text-4xl text-stone-800 py-6 capitalize font-black">We set an example</div>
            <div class="w-full h-fit overflow-x-scroll whitespace-nowrap mini-scrollbar">
                <div class="w-fit h-64 flex flex-row justify-around">
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border border-blue-200 border-opacity-30 flex flex-col align-top items-center justify-start">
                        <img src="{{asset('img/bgd1.png')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-stone-500 font-semibold capitalize">Product1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection