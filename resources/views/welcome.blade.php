<x-head></x-head>
    <body class=" min-h-screen">

        <!-- PAGE HEADER -->
        <div class="w-full h-auto bg-gradient-to-r from-black to-current">
            <x-header></x-header>
        </div>
        <!-- END OF PAGE HEADER -->
        

        <!-- SERVICES -->
        <div class="w-11/12 md:w-5/6 h-auto my-16 rounded-xl grid grid-cols-5 mx-auto bg-stone-900">
            <div class="col-span-5 md:col-span-3 flex items-center align-middle justify-center relative my-8 md:my-12">
                <div class="w-11/12 h-screen content-center flex flex-wrap items-center align-middle justify-center left-0 right-0 mx-auto top-0 py-6 ">
                    <img src="{{ asset('img/logo1.jpg') }}" alt="BRAND PHOTO" class="w-2/3 sm:h-auto rounded-xl">
                    <a href="" class="block w-1/2 text-center text-xl font-semibold border-2 border-blue-800 bg-blue-800 px-5 py-3 text-white mt-12 mb-4">Strike a Deal</a> <!-- in case someone has a property and chooses to get us advertise his property -->
                </div>
            </div>
            <div class="col-span-5 md:col-span-2 flex flex-wrap items-center align-middle justify-center py-8 px-4 bg-white">
                <div class="w-full sm:w-2/5 mx-auto md:w-5/6 h-auto my-4">
                    <div class="rounded-full w-24 h-auto mt-3 mx-auto">
                        <span class=" fas fa-cocktail text-6xl text-stone-900"></span>
                    </div>
                    <div class=" w-full h-auto">
                        <div class="font-semibold text-xl text-blue-800 text-center text-ellipsis">
                            Real Estate
                        </div>
                        <div class="text-lg text-slate-600 text-center line-clamp-3">Simplifying your home finding hassles with hundreds of luxurious properties</div>
                    </div>
                </div>

                <div class="w-full sm:w-2/5 mx-auto md:w-5/6 h-auto my-4 ">
                    <div class="rounded-full w-24 h-auto mt-3 mx-auto text-stone-900">
                        <span class="text-6xl fab fa-cloudscale"></span>
                    </div>
                    <div class=" w-full h-auto">
                        <div class="font-semibold text-xl text-blue-800 text-center text-ellipsis">
                            Architectural Design
                        </div>
                        <div class="text-lg text-slate-600 text-center line-clamp-3">One of the great beauties of architecture is that each time, it is like life starting all over again</div>
                    </div>
                </div>

                <div class="w-full sm:w-2/5 mx-auto md:w-5/6 h-auto my-4 ">
                    <div class="rounded-full w-24 h-auto mt-3 mx-auto text-stone-900">
                        <span class="text-6xl fas fa-building"></span>
                    </div>
                    <div class=" w-full h-auto">
                        <div class="font-semibold text-xl text-blue-800 text-center text-ellipsis">
                            General Construction
                        </div>
                        <div class="text-lg text-slate-600 text-center line-clamp-3">You can dream, create, design, and build the most wonderful place in the world. But it requires people to make the dream a reality</div>
                    </div>
                </div>

                <div class="w-full sm:w-2/5 mx-auto md:w-5/6 h-auto my-4 ">
                    <div class="rounded-full w-24 h-auto mt-3 mx-auto text-stone-900">
                        <span class="text-6xl fas fa-business-time"></span>
                    </div>
                    <div class=" w-full h-auto">
                        <div class="font-semibold text-xl text-blue-800 text-center text-ellipsis">
                            General Commerce
                        </div>
                        <div class="text-lg text-slate-600 text-center line-clamp-3">We take most of the money that we could have spent on paid advertising and instead put it back into the customer experience. Then we let the customers be our marketing</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF SERVICES -->



        <!-- Our works or products -->
        <!-- Latest -->
        <div class="w-full h-auto md:h-screen bg-black py-12">
            
            <div class="w-11/12 md:w-5/6 mx-auto text-2xl text-white text-center font-semibold py-2">Latest Deals</div>
            <div class="w-11/12 md:w-5/6 mx-auto text-slate-100 text-center mb-4">Don't think about it's current value. Think about it's future value</div>
            <!-- Horizontal scrolling container -->
            <div class="w-11/12 md:w-5/6 h-96 md:h-3/4 mx-auto my-4 ">
                <div class="w-full h-full flex whitespace-nowrap overflow-x-scroll no-scrollbar">
                    @if(count($data['latestTrending'])>0)

                    @foreach($data['latestTrending'] as $value)
                    <!-- Horizontal scroll item -->
                    <x-generic-item :data="$value"/>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        <!-- Others -->
        <div class="w-11/12 md:w-5/6 h-auto grid sm:grid-cols-2 md:grid-cols-3 mx-auto mt-4 py-12 overflow-y-scroll max-h-screen no-scrollbar" >
            @if(count($data['property'])>0)
                @foreach($data['property'] as $value)
                <x-generic-item2 :data="$value"/>
                @endforeach
            @endif
        </div>

        <!-- Our core values and interests -->
        <div class="w-full h-auto bg-gray-50 py-12 justify-center">
            <div class="w-11/12  md:w-5/6 md:px-16 py-10 rounded-2xl bg-stone-900 h-auto md:min-h-screen sm:grid grid-cols-3 mx-auto">
                <div class="col-span-3 py-4 text-center text-2xl text-white font-semibold">Core Values</div>
                <hr class="col-span-3">
                <div class="col-span-2 h-full max-w-md flex flex-wrap items-center align-middle justify-evenly">
                    <!-- single item -->
                    <div class="w-4/5  bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto my-8">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Commitment</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-300 line-clamp-3">You are our pillars, we ensure the security of your request. </div>
                    </div>

                    <!-- single item -->
                    <div class="w-4/5  bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto my-8">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Simplicity</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-300 line-clamp-3"> You are at the center of our process design. Straight forward and concise. </div>
                    </div>

                    <!-- single item -->
                    <div class="w-4/5  bg-black border-l-2 border-l-white rounded-r-lg px-3 py-4 h-auto my-8">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Excellence</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-300 line-clamp-3"> Our service grade is second to none. Confirm it yourself.  </div>
                    </div>
                </div>
                <div class="h-full md:w-2/3 max-w-xs flex flex-wrap items-center align-middle justify-evenly">

                    <!-- single item -->
                    <div class="w-4/5 md:w-11/12  bg-black rounded-r-lg px-3 py-6 h-auto my-8 border-l-2 border-l-white">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Innovation</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-200 line-clamp-3"> Our service grade is second to none. Confirm it yourself.  </div>
                    </div>

                    <!-- single item -->
                    <div class="w-4/5 md:w-11/12  bg-black rounded-r-lg px-3 py-6 h-auto my-8 border-l-2 border-l-white">
                        <div class="w-5/6 mx-auto py-1 text-center text-lg font-medium text-white">Proactivity</div>
                        <div class="w-5/6 mx-auto py-1 text-center text-base font-normal text-gray-200 line-clamp-3"> Our service grade is second to none. Confirm it yourself.  </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="w-full h-auto border-y-2 border-y-stone-900">
            <x-contact-forms></x-contact-forms>
        </div>

        <!-- Subscription and footer-->
        <div class="w-full h-auto bg-stone-900">
            <x-footer></x-footer>
        </div>

      
    </body>
</html>
