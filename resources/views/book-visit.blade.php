<x-head/>
<body>
    <x-header/>
    <div class="w-full bg-stone-200">
        <div class="py-12 w-11/12 md:w-5/6 mx-auto">
            <!-- image of item to book visit for -->
            <div class="py-6 shadow-2xl flex flex-wrap px-2 align-middle items-center bg-black">
                <img src="{{ $data['images'][0] }}" alt="" class="w-1/2 sm:w-1/3 mx-auto h-auto rounded-xl">
                <div class="w-5/6 sm:w-2/3 mx-auto px-3">
                    <form method="post" class="flex flex-wrap w-full">
                        @csrf
                        <div class="w-full py-4 text-center font-bold text-slate-300 text-2xl">
                            Book a visit
                        </div>
                        <div class="w-full lg:w-1/2 mx-auto px-2">
                            <div class="shadow-md py-1 my-1 px-3">
                                <label for="name" class="text-blue-400 font-extralight italic lowercase">name:</label><br>
                                <input type="text" required class="w-11/12 py-1 text-base text-slate-600 rounded-md focus:rounded-md" name="name" placeholder="your name here">
                            </div>
                            <div class="shadow-md py-1 my-1 px-3">
                                <label for="email" class="text-blue-400 font-extralight italic lowercase">email:</label><br>
                                <input type="email" required class="w-11/12 py-1 text-base text-slate-600 rounded-md focus:rounded-md" name="email" placeholder="your email here">
                            </div>
                            <div class="shadow-md py-1 my-1 px-3">
                                <label for="contact" class="text-blue-400 font-extralight italic lowercase">contact:</label><br>
                                <input type="tel" class="w-11/12 py-1 text-base text-slate-600 rounded-md focus:rounded-md" name="contact" placeholder="your contact here">
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 mx-auto px-2">
                            <div class="shadow-md py-1 my-1 px-3">
                                <label for="due_time" class="text-blue-400 font-extralight italic lowercase">Due time:</label><br>
                                <input type="datetime-local" required class="w-11/12 py-1 text-base text-slate-800 rounded-md focus:rounded-md" name="name" placeholder="choose date">
                            </div>
                            <input type="text" name="productId" id="" value="{{ $data['id'] }}" hidden>
                            <!-- <div class="shadow-md py-1 my-1 px-3"> -->
                                <!-- <label for="productId" class="text-blue-400 font-extralight italic lowercase">product id:</label><br> -->
                            <!-- </div> -->
                            <div class="shadow-md py-1 my-1 px-3">
                                <label for="due_time" class="text-blue-400 font-extralight italic lowercase">product:</label><br>
                                <div class=" w-11/12 py-1 h-fit text-base text-center text-slate-300 rounded-md focus:rounded-md no-scrollbar bg-black">
                                    {{ $data['name'] }}; grade {{ $data['grade']  }}, category {{ $data['category'] }}, price {{ $data['price'] }}
                                </div>
                            </div>
                        </div>
                        <hr class="w-full my-4 opacity-10">
                        <div class="w-full px-2 items-center justify-center">
                            <button type="submit" formaction="{{ url('/bookVisit/'.$data['id']) }}" class="text-slate-300 rounded-md px-5 py-2 mx-auto my-3 border border-stone-500 lowercase font-light self-center block">submit</button>
                        </div>
                    </form>
                    <script>
                        
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-stone-900">
        <x-footer/>
    </div>
</body>
</html>