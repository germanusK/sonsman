<div class="w-full md:h-full md:overflow-y-scroll no-scrollbar flex items-center align-middle justify-center border-b md:border-b-0 border-slate-200">
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div class="md:block mx-4  my-6 w-full justify-between flex align-top items-start">
        <div class="w-24 md:w-full py-4">
            <img src="{{ asset('img/logo1.jpg') }}" alt="logo" class="w-20 h-20 rounded-full mx-auto">
        </div>
        <div class="flex md:block justify-start align-top items-start">
            <div id="navbox" class="divide-y divide-stone-700 xs:w-44 md:w-full hidden md:block py-4 px-2 rounded-md shadow-2xl self-end justify-self-end md:object-left">
                <a href="{{ url("/rest") }}" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-2 px-3">Dashboard</a>
                <a href="{{ url('/rest/property') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-2 px-3">Property</a>
                <a href="{{ url('/rest/schedules') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-2 px-3">Schedules</a>
                <a href="{{ url('/rest/messages') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-2 px-3">Messages</a>
                <a href="{{ url('/rest/customers') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-2 px-3">Customers</a>
                <a href="{{ url('/rest/info') }}" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-2 px-3">Info</a>
                <form action="{{ route('logout') }}" method="post">
                    {{csrf_field()}}
                    <button type="submit" class="block w-full no-underline hover:no-underline text-slate-200 text-xl text-left py-5 px-3">Log out</button>
                </form>
            </div>
            <div class=" p-2 flex md:block w-full h-full object-top align-middle items-center justify-between">
                <div class="h-full flex  md:w-full align-middle items-center divide-x-4 divide-transparent">
                    <img src=" {{ asset('img/logo1.jpg') }} " alt="" class="w-12 h-12 rounded-full hidden md:flex">
                    <span class="block flex-auto text-slate-200 italic">Germanus</span>
                </div>
                <button class="flex md:hidden mx-2" onclick="toggleNav()"><span class="text-xl text-white fas fa-angle-down"></span></button>
            </div>
            <script>
                function toggleNav() {
                    if (document.getElementById('navbox').classList.contains('hidden')) {
                        document.getElementById('navbox').classList.remove('hidden');
                    } else {
                        document.getElementById('navbox').classList.add('hidden');
                    }
                }
            </script>
        </div>
    </div>
</div>