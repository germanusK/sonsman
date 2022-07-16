@extends('templates.main-page')
@section('page')
<div class="w-full md:h-screen welcome-bg">
    <div class="w-full mx-auto md:flex md:h-full">
        <div class="w-full md:w-3/5 md:h-full py-4 flex items-center align-middle justify-center bg-grad1">
            <div class="w-11/12 flex flex-col justify-around my-4 py-1 rounded-md mx-auto">
                <div class="w-full py-2 flex-auto border-y-4 bg-p  border-s border-double rounded-t-2xl">
                    <img src="{{asset('img/logo.png')}}" alt="" class="w-24 h-auto my-6 mx-auto rounded-lg bg-purple-200">
                    <div class="w-5/6 mx-auto min-h-full justify-center items-center align-middle text-large text-center text-purple-100 font-semibold">Sonsman is the ultimate solution to the definite problem. We solve your problem and restore your happiness and your joy</div>
                </div>
                <div class="w-full mt-2 pt-1 px-1 relative hidden md:block flex-grow">
                    <div class="w-4/5 h-full mx-auto mb-11 py-4 flex md:grid grid-cols-2 flex-wrap justify-evenly rounded-2xl">
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-d bg-opacity-70 border border-p border-opacity-20 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-xlarge text-s font-black"> &iquest; </span>
                            <span class="mx-auto text-medium text-p font-semibold capitalize text-center block">Definite quotes</span>
                        </div>
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-d bg-opacity-70 border border-p border-opacity-20 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-xlarge text-s font-black"> &lozenge; </span>
                            <span class="mx-auto text-medium text-p font-semibold capitalize text-center block">Ultimate solutions</span>
                        </div>
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-d bg-opacity-70 border border-p border-opacity-20 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-xlarge text-s font-black"> &Darr; </span>
                            <span class="mx-auto text-medium text-p font-semibold capitalize text-center block">Fresh smile</span>
                        </div>
                        <div class="w-40 hover:shadow hover:shadow-blue-500 px-3 bg-d bg-opacity-70 border border-p border-opacity-20 py-1 rounded space-x-1 my-2 mx-auto">
                            <span class="my-3 text-center block mx-auto text-xlarge text-s font-black"> &fork; </span>
                            <span class="mx-auto text-medium text-p font-semibold capitalize text-center block">Definite park</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-full md:w-2/5 md:h-full py-4 flex items-center align-middle justify-center">
            <div class="block w-11/12 mx-auto border-4 border-double border-d rounded-2xl bg-p bg-opacity-20 py-6">
                <div class="text-xlarge font-black my-8 text-s text-center">SONSMAN <br> <span class="text-medium text-p uppercase">beyond standard, unto uptimum</span></div>
                <div class="text-large text-center text-d">Making it all new and fresh. </div>
                <div class="flex items-center justify-content-center">
                    <a href="{{url('/home')}}" class="my-6 mx-auto py-2 px-8 border-4 border-double border-p hover:shadow-inner bg-d transition-all text-p font-semibold text-xlarge rounded-r-full rounded-l-full">Welcome Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
