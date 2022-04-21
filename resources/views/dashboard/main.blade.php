<x-head/>
    <body>
        <div class="w-full md:w-11/12 md:rounded-xl mx-auto h-full md:max-h-fit md:my-16 bg-stone-600 py-6 px-4">
            <div class="w-full h-full flex flex-wrap md:divide-x xs:divide-y divide-stone-400">
                <div class="w-full flex h-fit max-h-full md:w-1/4 md:h-full overflow-y-scroll no-scrollbar">
                    <x-dashboard.navbar />
                </div>
                <div class="w-full md:w-3/4 h-fit md:h-full md:flex items-center align-middle justify-center overflow-y-scroll no-scrollbar px-3 py-2 my-3">
                    @yield('content') 
                </div>
            </div>
        </div> 

    </body>
</html>