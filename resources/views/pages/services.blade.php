@extends('templates.page-template')
@section('page-content')
<div class="w-full">
    <div class="w-full flex flex-col flex-wrap justify-center sl1">
        <div class="w-full h-full lg:flex border-y-2 border-d border-double">
            <div class="w-full lg:w-1/2 h-full text-center text-3xl md:text-5xl text-s font-black capitalize flex flex-col justify-center">Our Services</div>
            <div class="w-full lg:w-1/2 hidden lg:block">
                <img src="{{asset('img/riekus.jpg')}}" alt="" class="w-auto max-w-full h-full mx-auto border-x-4 border-p">
            </div>
        </div>
    </div>
    <div class="w-full h-auto flex flex-wrap justify-center bg-p py-14">
        <div class="w-52 h-36 mx-5 relative my-6">
            <span class="absolute -top-1/4 left-0 text-5xl text-s fas fa-globe bg-p rounded-full p-2"></span>
            <div class="w-full h-5/6 border-4 border-d rounded-md text-s text-2xl capitalize align-middle flex flex-col justify-center font-semibold text-center">Web development</div>
        </div>
        <div class="w-52 h-36 mx-5 relative my-6">
            <span class="absolute -top-1/4 left-0 text-5xl text-s fas fa-mobile-alt bg-p rounded-full p-2"></span>
            <div class="w-full h-5/6 border-4 border-d rounded-md text-s text-2xl capitalize align-middle flex flex-col justify-center font-semibold text-center">Mobile development</div>
        </div>
        <div class="w-52 h-36 mx-5 relative my-6">
            <span class="absolute -top-1/4 left-0 text-5xl text-s fas fa-lightbulb bg-p rounded-full p-2"></span>
            <div class="w-full h-5/6 border-4 border-d rounded-md text-s text-2xl capitalize align-middle flex flex-col justify-center font-semibold text-center">SEO</div>
        </div>
        <div class="w-52 h-36 mx-5 relative my-6">
            <span class="absolute -top-1/4 left-0 text-5xl text-s fas fa-mars-stroke bg-p rounded-full p-2"></span>
            <div class="w-full h-5/6 border-4 border-d rounded-md text-s text-2xl capitalize align-middle flex flex-col justify-center font-semibold text-center">Graphics design</div>
        </div>
        <div class="w-52 h-36 mx-5 relative my-6">
            <span class="absolute -top-1/4 left-0 text-5xl text-s fas fa-cogs bg-p rounded-full p-2"></span>
            <div class="w-full h-5/6 border-4 border-d rounded-md text-s text-2xl capitalize align-middle flex flex-col justify-center font-semibold text-center">General Software development</div>
        </div>
        <div class="w-52 h-36 mx-5 relative my-6">
            <span class="absolute -top-1/4 left-0 text-5xl text-s fas fa-smile-wink bg-p rounded-full p-2"></span>
            <div class="w-full h-5/6 border-4 border-d rounded-md text-s text-2xl capitalize align-middle flex flex-col justify-center font-semibold text-center">Quotes</div>
        </div>
    </div>
    <div class="w-full h-auto bg-d py-10">
        <div class="w-full flex flex-wrap items-start justify-center">
            <a href="" class="block w-96 h-64 my-6 border-4 border-solid rounded-md border-collapse border-s hover:border-2 hover:border-dashed relative mx-2">
                <img src="{{asset('img/sunny.jpg')}}" alt="" class="w-full h-full rounded-sm border-b border-d absolute">
                <div class="w-full h-full absolute overflow-y-clip flex flex-col justify-center bg-slate-900 bg-opacity-40">
                    <div class="w-full text-center py-1 text-d text-lg uppercase font-bold">Web Development</div>
                    <div class="w-full text-center text-d px-2 font-semibold">Building of websites and web applications from basic blogs and portfolios to sophisticated e-commerce platforms with efficiency and simplicity at the core</div>
                </div>
            </a>
            <a href="" class="block w-96 h-64 my-6 border-4 border-solid rounded-md border-collapse border-s hover:border-2 hover:border-dashed relative mx-2">
                <img src="{{asset('img/mohammad.jpg')}}" alt="" class="w-full h-full rounded-sm border-b border-d absolute">
                <div class="w-full h-full absolute overflow-y-clip flex flex-col justify-center bg-slate-900 bg-opacity-40">
                    <div class="w-full text-center py-1 text-d text-lg uppercase font-bold">Mobile Development</div>
                    <div class="w-full text-center text-d px-2 font-semibold">Building of highly optimized mobile applications to manage all your businesses and institutions right from your mobile device</div>
                </div>
            </a>
            <a href="" class="block w-96 h-64 my-6 border-4 border-solid rounded-md border-collapse border-s hover:border-2 hover:border-dashed relative mx-2">
                <img src="{{asset('img/anmol.jpg')}}" alt="" class="w-full h-full rounded-sm border-b border-d absolute">
                <div class="w-full h-full absolute overflow-y-clip flex flex-col justify-center bg-slate-900 bg-opacity-40">
                    <div class="w-full text-center py-1 text-d text-lg uppercase font-bold">SEO</div>
                    <div class="w-full text-center text-d px-2 font-semibold">Making sure your website meet its highest possible visibility to the world. Rank your business/institution high on google search</div>
                </div>
            </a>
            <a href="" class="block w-96 h-64 my-6 border-4 border-solid rounded-md border-collapse border-s hover:border-2 hover:border-dashed relative mx-2">
                <img src="{{asset('img/anastasia.jpg')}}" alt="" class="w-full h-full rounded-sm border-b border-d absolute">
                <div class="w-full h-full absolute overflow-y-clip flex flex-col justify-center bg-slate-900 bg-opacity-40">
                    <div class="w-full text-center py-1 text-d text-lg uppercase font-bold">Graphics Design</div>
                    <div class="w-full text-center text-d px-2 font-semibold">Change the face of your website or mobile app with a cool deisgn. Specialized in website design, logo design, cards and barners.</div>
                </div>
            </a>
            <a href="" class="block w-96 h-64 my-6 border-4 border-solid rounded-md border-collapse border-s hover:border-2 hover:border-dashed relative mx-2">
                <img src="{{asset('img/domenico.jpg')}}" alt="" class="w-full h-full rounded-sm border-b border-d absolute">
                <div class="w-full h-full absolute overflow-y-clip flex flex-col justify-center bg-slate-900 bg-opacity-40">
                    <div class="w-full text-center py-1 text-d text-lg uppercase font-bold">General Software Development</div>
                    <div class="w-full text-center text-d px-2 font-semibold">Development of desktop applicatios and related custom systems according to your needs.</div>
                </div>
            </a>
            <a href="" class="block w-96 h-64 my-6 border-4 border-solid rounded-md border-collapse border-s hover:border-2 hover:border-dashed relative mx-2">
                <img src="{{asset('img/skuffwdd161.jpg')}}" alt="" class="w-full h-full rounded-sm border-b border-d absolute">
                <div class="w-full h-full absolute overflow-y-clip flex flex-col justify-center bg-slate-900 bg-opacity-40">
                    <div class="w-full text-center py-1 text-d text-lg uppercase font-bold">Quotes</div>
                    <div class="w-full text-center text-d px-2 font-semibold">Get refresh and relief with unlimited quotes accross different fields and views of life.</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
