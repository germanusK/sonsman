<div class="w-full bg-d">
    <div class="flex">
        <div class="flex-1 flex items-center justify-start py-3"><span class="text-large text-s mx-6 font-black px-1 fas fa-registered" title="more about sonsman"></span></div>
        <div class="flex-1 flex items-center justify-around py-3">
            <span class="text-medium font-semibold text-p italic">&phone; +237672908239 <span class="hidden lg:inline-block">germanuskeming@gmail.com</span> </span>
            <a href="{{url('/login')}}" class="text-large capitalize text-s rounded-full font-semibold px-1" title="sign in"><span class=" fas fa-sign-in-alt"></span></a>
        </div>
    </div>
    <div class="flex bg-p justify-between">
        <div class=" w-1/3 py-3 justify-start px-6">
            <a href="{{url('/')}}" class="text-d text-large font-black font-serif tracking-tighter border-2 border-d px-3 shadow-inner bg-p  rounded-r-full rounded-l-full uppercase">sonsman</a>
        </div>
        <div id="navbox" class="hidden w-2/3 justify-center lg:flex px-4 py-3 items-center align-middle text-medium font-semibold font-serif bg-p">
            <a href="{{url('/home')}}" class="block no-underline border-b lg:border-0 border-d py-1 text-d px-w capitalize px-3">Home</a>
            <a href="{{url('/services')}}" class="block no-underline border-b lg:border-0 border-d py-1 text-d px-w capitalize px-3">services</a>
            <a href="{{url('/works')}}" class="block no-underline border-b lg:border-0 border-d py-1 text-d px-w capitalize px-3">works</a>
            <a href="{{url('/quotes')}}" class="block no-underline border-b lg:border-0 border-d py-1 text-d px-w capitalize px-3">s-quotes</a>
            <a href="{{url('/blog')}}" class="block no-underline border-b lg:border-0 border-d py-1 text-d px-w capitalize px-3">s-blog</a>
            <a href="{{url('/help')}}" class="block no-underline border-b lg:border-0 border-d py-1 text-d px-w capitalize px-3">help</a>
        </div>
        <button class="rounded object-top float-right p-1 mx-3 my-2 lg:hidden" onclick="toggle_nav()"><span class="text-large text-s font-bold fas fa-bars"></span></button>
    </div>
    <script>
        // let toggle_flag = false;
        function toggle_nav(){
            $('#navbox').toggleClass('hidden');
            $('#navbox').toggleClass('w-full');
            $('#navbox').toggleClass('absolute');
            $('#navbox').toggleClass('top-16');
            $('#navbox').toggleClass('z-20');

            // toggle_flag = !toggle_flag;
            // if (toggle_flag) {
            // }
        }
    </script>
</div>

