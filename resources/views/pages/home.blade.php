@extends('templates.page-template')
@section('page-content')
<div class="w-full home-bg">
    <div class="w-full mx-auto py-1 flex items-center align-middle hl1">
        <div class="w-full md:w-4/5 text-center mx-auto px-3  items-center tracking-widest leading-relaxed align-middle justify-center h-full text-2xl md:text-3xl text-d font-semibold font-sans flex flex-wrap flex-col">
            <div class="w-full md:w-4/5 text-center mx-auto px-3 tracking-widest leading-relaxed font-black mt-3 text-3xl md:text-5xl block">Welcome to Sonsman</div>
            Join us where real things are happening
        </div>
    </div>
    <div class="w-full mx-auto py-10 md:flex items-center align-middle bg-white bg-opacity-10">
        <div class="md:w-5/12 text-center text-4xl text-d font-semibold">What we do</div>
        <div class="md:w-7/12 sm:flex flex-wrap justify-between">
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p bg-opacity-50 border border-d hover:border-blue-500 rounded-xl">
                <span class="fas fa-code text-5xl font-black text-s"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-d font-semibold mx-auto capitalize">Web & Mobile development</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p border border-d hover:border-blue-500 rounded-xl">
                <span class="fab fa-deviantart text-5xl font-black text-s"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-d font-semibold mx-auto">Web Design</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p border border-d hover:border-blue-500 rounded-xl">
                <span class="fas fa-dice text-5xl font-black text-s"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-d font-semibold mx-auto">Graphics Design</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p border border-d hover:border-blue-500 rounded-xl">
                <span class="fas fa-laugh-beam text-5xl font-black text-s"></span>
                <div class="text-2xl sm:text-3xl w-full block text-center my-4 text-d font-semibold mx-auto">Sonsman Quotes</div>
            </div>
        </div>
    </div>

    <!-- Apply some animations here -->
    <div class="w-full bg-p bg-opacity-90 bgd1 py-1">
        <div class="w-11/12 mx-auto my-12 px-10  md:h-96 relative">
            <div class="w-fit px-3 py-2 md:absolute left-10 top-1/4 text-white italic text-3xl max-w-xs">It can speak for itself. Its Express </div>
            <div class="w-fit px-3 py-2 md:absolute right-10 top-10 text-white italic text-3xl max-w-xs">when your thought changes into uptimized designs</div>
            <div class="w-fit px-3 py-2 md:absolute left-1/4 bottom-1/3 text-white italic text-3xl max-w-xs">Trying to give my app a sense of perception</div>
            <div class="w-fit px-3 py-2 md:absolute left-2/4 bottom-0 text-white italic text-3xl max-w-xs">Do you need a logo that talks?</div>
        </div>
    </div>
    <div class="w-full mx-auto py-8 bg-d">
        <div class="w-full flex items-end justify-end text-4xl text-p font-semibold px-12">How we understand it</div>
        <div class="w-full sm:flex flex-wrap justify-around py-4">
            <div class="w-1/2 md:w-1/4 mx-auto my-5 p-2 text-center text-4xl font-bold bg-s hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-p bg-p flex items-center align-middle text-d">access s-quote services</div>
            </div>
            <div class="w-1/2 md:w-1/4 mx-auto my-5 p-2 text-center text-4xl font-bold bg-s hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-p bg-p flex items-center align-middle text-d">Web development services</div>
            </div>
            <div class="w-1/2 md:w-1/4 mx-auto my-5 p-2 text-center text-4xl font-bold bg-s hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-p bg-p flex items-center align-middle text-d">Graphics design services</div>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto py-20 h-fit">
        <div class="w-1/2 mx-auto h-96 py-2 rounded-l-full rounded-r-full shadow-2xl border-b-4 border-s shadow-red-600 bg-d relative flex align-middle items-center justify-center">
            <div class="text-p rounded-full text-4xl font-black text-center uppercase">Who benefits</div>
            <p class="sm:w-1/2 absolute bottom-3/4 right-3/4 text-2xl text-p font-semibold capitalize py-4 px-6 rounded-r-full rounded-l-full bg-d shadow-xl shadow-red-500 border-b-4 border-s text-center">Business & Institution owners</p>
            <p class="sm:w-1/2 absolute top-3/4 right-3/4 text-2xl text-p font-semibold capitalize py-4 px-6 rounded-r-full rounded-l-full bg-d shadow-xl shadow-red-500 border-b-4 border-s text-center">Software project managers</p>
            <p class="sm:w-1/2 absolute bottom-3/4 left-3/4 text-2xl text-p font-semibold capitalize py-4 px-6 rounded-r-full rounded-l-full bg-d shadow-xl shadow-red-500 border-b-4 border-s text-center">Quote lovers and users</p>
        </div>
    </div>
    <div class="w-full py-12 bg-d">
        <div class="w-11/12 mx-auto md:h-96 flex flex-col items-center align-middle justify-center">
            <div class="w-full text-center text-4xl text-p py-6 capitalize font-black">Our products</div>
            <div class="w-full h-fit">
                <div class="w-full h-64 flex flex-wrap flex-row justify-around mx-auto">
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-xl text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                </div>
            </div>
            <a href="{{url('/products')}}" class=" w-fit my-8 py-1 px-3 border-2 border-p bg-s text-p rounded font-semibold">more</a>
        </div>
    </div>
</div>
@endsection
