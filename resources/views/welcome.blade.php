@extends('templates.main-page')
@section('page')
<div class="w-full md:h-screen">
    <div class="w-11/12 md:w-5/6 mx-auto flex md:h-full">
        <div class="w-2/5 md:h-full flex items-center align-middle justify-center">
            <div class="block w-11/12 mx-auto border-4 border-double border-purple-900 rounded-2xl bg-purple-900 bg-opacity-20 py-6">
                <div class="text-3xl md:text-4xl font-black my-8 text-blue-800 text-center">SONSMAN <br> <span class="text-xl text-blue-500 uppercase">beyond standard, unto uptimum</span></div>
                <div class="text-2xl text-center text-purple-600">Making it all new and fresh. </div>
                <div class="flex items-center justify-content-center">
                    <a href="{{url('/home')}}" class="my-6 mx-auto py-2 px-8 border-2 border-purple-800 hover:shadow-inner bg-purple-300 transition-all text-purple-800 text-3xl rounded-r-full rounded-l-full">Welcome Home</a>
                </div>
            </div>
        </div>
        <div class="w-3/5 md:h-full flex items-center align-middle justify-center bg-purple-900">
            <div class="w-11/12 flex flex-col justify-around my-4 py-1 rounded-md mx-auto">
                <div class="w-full py-2 flex-auto">
                    <img src="{{asset('img/iconus.png')}}" alt="" class="w-24 h-auto my-6 mx-auto rounded-lg bg-purple-200">
                    <div class="w-5/6 mx-auto min-h-full justify-center items-center align-middle text-2xl text-center text-purple-100 font-semibold">Sonsman is the ultimate solution to the definite problem. We solve your problem and restore your happiness and your joy</div>
                </div>
                <div class="w-full mt-2 pt-1 px-1 relative flex-grow">
                    <div class="w-4/5 h-full mx-auto mb-11 py-4 flex md:grid grid-cols-2 flex-wrap justify-evenly rounded-2xl">
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-white bg-opacity-70 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-5xl text-blue-800 font-black"> &iquest; </span>
                            <span class="mx-auto text-xl text-blue-500 font-semibold capitalize text-center block">Definite quotes</span>
                        </div>
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-white bg-opacity-70 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-5xl text-blue-800 font-black"> &lozenge; </span>
                            <span class="mx-auto text-xl text-blue-500 font-semibold capitalize text-center block">Ultimate solutions</span>
                        </div>
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-white bg-opacity-70 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-5xl text-blue-800 font-black"> &Darr; </span>
                            <span class="mx-auto text-xl text-blue-500 font-semibold capitalize text-center block">Fresh smile</span>
                        </div>
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-white bg-opacity-70 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-5xl text-blue-800 font-black"> &fork; </span>
                            <span class="mx-auto text-xl text-blue-500 font-semibold capitalize text-center block">Definite park</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
