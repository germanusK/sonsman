
<div class="w-full min-h-screen relative bg-slate-300">
    <div class="w-5/6 min-h-screen pt-36 rounded-xl bg-black  left-8 top-4 z-0 borderfuchsia drop-shadow-none shadow-fuchsia-50">
        <div class="w-full px-4 pt-96">
            <div class="text-center w-full py-1 text-stone-300 text-2xl font-semibold">Popular/latest property</div>
            <div class="grid grid-cols-3 justify-evenly items-center align-middle">
                @for($i = 0; $i < 9; $i++)
                <x-generic-item2></x-generic-item2>
                @endfor
            </div>
        </div>
    </div>
    <div class="w-2/3 min-w-fit py-4 my-4 rounded-xl  absolute right-4 top-16 z-10 border sidebox1 bg-gradient-to-br from-slate-900 to-blue-900 bg-blend-color-burn" >

        <div class="w-fit max-w-full inline-block mx-auto h-fit justify-between items-center align-middle">
            <div class="w-4/5 mx-auto justify-evenly items-center align-middle py-4 flex">
                <div class="text-2xl md:text-4xl  text-slate-300">Get it now and save the cost appreciation</div>
                <img src="{{ url('img/shut.jpg') }}" alt="" class="w-60 h-60 rounded-full opacity-95">
            </div>
            <div class="justify-center h-full align-middle items-center px-4 bg-white bg-opacity-95">
                <x-search-component></x-search-component>
            </div>
        </div>

    </div>

    
</div>