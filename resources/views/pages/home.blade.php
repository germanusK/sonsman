@extends('templates.page-template')
@section('page-content')
<div class="w-full home-bg">
    <div class="w-full mx-auto py-1 flex items-center align-middle hl1">
        <div class="w-full md:w-4/5 text-center mx-auto px-3  items-center tracking-widest leading-relaxed align-middle justify-center h-full text-large md:text-xlarge text-d font-semibold font-sans flex flex-wrap flex-col">
            <div class="w-full md:w-4/5 text-center mx-auto px-3 tracking-widest leading-relaxed font-black mt-3 text-xlarge block">Welcome to Sonsman</div>
            Join us where real things are happening
        </div>
    </div>
    <div class="w-full mx-auto py-10 md:flex items-center align-middle bg-white bg-opacity-10">
        <div class="md:w-5/12 text-center text-xlarge text-d font-semibold">What we do</div>
        <div class="md:w-7/12 sm:flex flex-wrap justify-between">
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p bg-opacity-50 border border-d hover:border-blue-500 rounded-xl">
                <span class="fas fa-code text-xlarge font-black text-s"></span>
                <div class="text-xlarge w-full block text-center my-4 text-d font-semibold mx-auto capitalize">Web & Mobile development</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p border border-d hover:border-blue-500 rounded-xl">
                <span class="fab fa-deviantart text-xlarge font-black text-s"></span>
                <div class="text-xlarge w-full block text-center my-4 text-d font-semibold mx-auto">Web Design</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p border border-d hover:border-blue-500 rounded-xl">
                <span class="fas fa-dice text-xlarge font-black text-s"></span>
                <div class="text-xlarge w-full block text-center my-4 text-d font-semibold mx-auto">Graphics Design</div>
            </div>
            <div class="sm:w-5/12 mx-auto py-7 px-3 my-4 flex flex-wrap items-center align-middle justify-center bg-p border border-d hover:border-blue-500 rounded-xl">
                <span class="fas fa-laugh-beam text-xlarge font-black text-s"></span>
                <div class="text-xlarge w-full block text-center my-4 text-d font-semibold mx-auto">Sonsman Quotes</div>
            </div>
        </div>
    </div>
    <!-- Apply some animations here -->
    <div class="w-full bg-p bg-opacity-90 bgd1 py-1">
        <div class="w-11/12 mx-auto my-12 px-2 md:px-10  md:h-96 relative">
            <div class="w-fit px-1 py-2 md:absolute left-10 top-1/4 text-white italic text-xlarge max-w-xs">It can speak for itself. Its Express </div>
            <div class="w-fit px-1 py-2 md:absolute right-10 top-10 text-white italic text-xlarge max-w-xs">when your thought changes into uptimized designs</div>
            <div class="w-fit px-1 py-2 md:absolute left-1/4 bottom-1/3 text-white italic text-xlarge max-w-xs">Trying to give my app a sense of perception</div>
            <div class="w-fit px-1 py-2 md:absolute left-2/4 bottom-0 text-white italic text-xlarge max-w-xs">Do you need a logo that talks?</div>
        </div>
    </div>
    <div class="w-full mx-auto py-8 bg-d">
        <div class="w-full flex items-end justify-end text-xlarge text-p font-semibold px-12">How we understand it</div>
        <div class="w-full sm:flex flex-wrap justify-around py-4">
            <div class="w-4/5 sm:w-2/3 md:w-1/4 mx-auto my-5 p-2 text-center text-xlarge font-bold bg-s hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-p bg-p flex items-center align-middle text-d">access s-quote services</div>
            </div>
            <div class="w-4/5 sm:w-2/3 md:w-1/4 mx-auto my-5 p-2 text-center text-xlarge font-bold bg-s hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-p bg-p flex items-center align-middle text-d">Web development services</div>
            </div>
            <div class="w-4/5 sm:w-2/3 md:w-1/4 mx-auto my-5 p-2 text-center text-xlarge font-bold bg-s hover:text-blue-500 rounded-md capitalize">
                <div class="w-full h-full rounded-md py-10 px-2 border border-p bg-p flex items-center align-middle text-d">Graphics design services</div>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto h-fit">
        <div class="w-full lg:w-5/6 mx-auto lg:flex align-middle items-center justify-center">
            <div class="w-full lg:w-2/5 text-d h-auto lg:h-full py-5 text-xlarge font-black text-center uppercase">Who benefits</div>
            <div class="w-full lg:w-3/5 py-5 h-auto lg:h-full flex flex-col justify-evenly ">
                <div class="w-5/6 md:w-4/5 mx-auto text-large text-s font-semibold capitalize py-1 px-3 my-3 rounded-md bg-p border-b border-l-4 border-double border-s text-center">Business & Institution owners</div>
                <div class="w-5/6 md:w-4/5 mx-auto text-large text-s font-semibold capitalize py-1 px-3 my-3 rounded-md bg-p border-b border-l-4 border-double border-s text-center">Software project managers</div>
                <div class="w-5/6 md:w-4/5 mx-auto text-large text-s font-semibold capitalize py-1 px-3 my-3 rounded-md bg-p border-b border-l-4 border-double border-s text-center">Quote lovers and users</div>
            </div>
        </div>
    </div>
    <div class="w-full py-12 bg-d">
        <div class="w-11/12 mx-auto flex flex-col items-center align-middle justify-center">
            <div class="w-full text-center text-xlarge text-p py-6 capitalize font-black">Our products</div>
            <div class="w-full h-fit whitespace-nowrap overflow-x-scroll">
                <div class="w-fit min-w-full h-auto flex flex-row justify-around mx-auto">
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-medium text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-medium text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-medium text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                    <div class="w-60 h-60 mx-4 rounded border-y-2 bg-p border-s border-double border-opacity-30 flex flex-col align-top items-center justify-start relative">
                        <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-5/6 rounded mb-2 mt-0">
                        <div class="mx-2 text-center text-medium text-s font-semibold capitalize">Product1</div>
                        <a href="" class="w-full h-full block absolute text-d text-center align-middle text-xl"><span class="fas fa-hand-pointer"></span></a>
                    </div>
                </div>
            </div>
            <a href="{{url('/products')}}" class=" w-fit my-8 py-1 px-3 border-2 border-p bg-s text-p rounded font-semibold">more</a>
        </div>
    </div>
</div>
@endsection
