<div class="w-11/12 md:w-5/6 h-auto mx-auto py-12 my-12">
                <div class="w-full text-center text-2xl font-semibold text-stone-900 py-4">Attending to Your Request:</div>
                <div class="flex flex-wrap items-center justify-evenly py-4 gap-4">

                    <a onclick="setContactForm(1)" class="my-3 inline-block px-3 py-2 hover:bg-stone-200 shadow shadow-slate-600 rounded hover:cursor-move">
                        <div class="text-xl font-semibold text-stone-900 py-1 text-center">make an order</div>
                        <div class="text-lg font-normal text-stone-600 py-1 line-clamp-3">We will help you get property of your type</div>
                    </a>

                    <a onclick="setContactForm(2)" class="my-3 inline-block px-3 py-2 hover:bg-stone-200 shadow shadow-slate-600 rounded hover:cursor-move">
                        <div class="text-xl font-semibold text-stone-900 py-1 text-center">report a problem</div>
                        <div class="text-lg font-normal text-stone-600 py-1 line-clamp-3">Together, we are taking the pain</div>
                    </a>

                    <a onclick="setContactForm(3)" class="my-3 inline-block px-3 py-2 hover:bg-stone-200 shadow shadow-slate-600 rounded hover:cursor-move">
                        <div class="text-xl font-semibold text-stone-900 py-1 text-center">send a message</div>
                        <div class="text-lg font-normal text-stone-600 py-1 line-clamp-3">Your own opinion has a place with us</div>
                    </a>
                </div>


                <!-- form containers -->
                <div class=" mx-auto my-4 contactFormBox rounded bg-stone-300">
                    <!-- create an order -->
                    <div class="w-full py-2 hidden">
                        <form action="{{ url(<?php echo Illuminate\Support\Facades\Config::get('api_routes.api_orders'); ?>) }}" method="post" class="w-full flex flex-wrap justify-center items-center">
                            <div class="text-2xl text-stone-900 text-center my-2">Make an order</div> <br>
                            <div class="w-fit mx-auto gap-1 flex flex-wrap justify-between items-center">
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="name" class=" text-sm text-blue-400 hover:text-blue-700">Enter your name:</label><br>
                                    <input type="text" name="name" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your name">
                                </div>
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="email" class=" text-sm text-blue-400 hover:text-blue-700">Enter your email:</label><br>
                                    <input type="email" name="email" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your email">
                                </div>
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="contact" class=" text-sm text-blue-400 hover:text-blue-700">Enter your contact:</label><br>
                                    <input type="tel" name="name" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your contact">
                                </div>
                                <br>
                                <div class=" w-full my-2 p-1">
                                    <label for="description" class=" text-sm text-blue-400 hover:text-blue-700">Item description:</label><br>
                                    <textarea type="text" name="description" rows="3" id="" class="py-1 px-2 w-full text-stone-900 bg-white hover:border-blue-400" placeholder="Item description and specifications"></textarea>
                                </div>
                                <br>
                                <div class="w-full items-end justify-end justify-self-end p-1 relative">
                                    <button type="submit" class="px-5 py-1 rounded bg-stone-600 hover:bg-stone-900 text-white absolute right-0 left-auto bottom-0">send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- report a problem -->
                    <div class="w-full py-2 hidden">
                        <form action="{{ url(<?php echo Illuminate\Support\Facades\Config::get('api_routes.api_problems'); ?>) }}" method="post" class="w-full flex flex-wrap justify-center items-center">
                            <div class="text-2xl text-stone-900 text-center my-2">Report problem</div> <br>
                            <div class="w-fit mx-auto gap-1 flex flex-wrap justify-between items-center">
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="name" class=" text-sm text-blue-400 hover:text-blue-700">Enter your name:</label><br>
                                    <input type="text" name="name" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your name">
                                </div>
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="email" class=" text-sm text-blue-400 hover:text-blue-700">Enter your email:</label><br>
                                    <input type="email" name="email" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your email">
                                </div>
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="contact" class=" text-sm text-blue-400 hover:text-blue-700">Enter your contact:</label><br>
                                    <input type="tel" name="name" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your contact">
                                </div>
                                <br>
                                <div class=" w-full my-2 p-1">
                                    <label for="description" class=" text-sm text-blue-400 hover:text-blue-700">Item description:</label><br>
                                    <textarea type="text" name="description" rows="3" id="" class="py-1 px-2 w-full text-stone-900 bg-white hover:border-blue-400" placeholder="Item description and specifications"></textarea>
                                </div>
                                <br>
                                <div class="w-full items-end justify-end justify-self-end p-1 relative">
                                    <button type="submit" class="px-5 py-1 rounded bg-stone-600 hover:bg-stone-900 text-white absolute right-0 left-auto bottom-0">send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- send a message -->
                    <div class="w-full py-2 hidden">
                        <form action="{{ url(<?php echo Illuminate\Support\Facades\Config::get('api_routes.api_messages'); ?>) }}" method="post" class="w-full flex flex-wrap justify-center items-center">
                            <div class="text-2xl text-stone-900 text-center my-2">Send message</div> <br>
                            <div class="w-fit mx-auto gap-1 flex flex-wrap justify-between items-center">
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="name" class=" text-sm text-blue-400 hover:text-blue-700">Enter your name:</label><br>
                                    <input type="text" name="name" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your name">
                                </div>
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="email" class=" text-sm text-blue-400 hover:text-blue-700">Enter your email:</label><br>
                                    <input type="email" name="email" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your email">
                                </div>
                                <div class=" my-2 p-1 flex-auto">
                                    <label for="contact" class=" text-sm text-blue-400 hover:text-blue-700">Enter your contact:</label><br>
                                    <input type="tel" name="name" id="" class="py-1 px-2 text-stone-900 bg-white hover:border-blue-400" placeholder="enter your contact">
                                </div>
                                <br>
                                <div class=" w-full my-2 p-1">
                                    <label for="description" class=" text-sm text-blue-400 hover:text-blue-700">Item description:</label><br>
                                    <textarea type="text" name="description" rows="3" id="" class="py-1 px-2 w-full text-stone-900 bg-white hover:border-blue-400" placeholder="Item description and specifications"></textarea>
                                </div>
                                <br>
                                <div class="w-full items-end justify-end justify-self-end p-1 relative">
                                    <button type="submit" class="px-5 py-1 rounded bg-stone-600 hover:bg-stone-900 text-white absolute right-0 left-auto bottom-0">send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                 
                function setContactForm(n){
                    document.querySelectorAll(".contactFormBox > *").forEach((value, key, parent)=>{
                        if (key == n-1) {
                            value.classList.remove("hidden");
                        }
                        else
                            value.classList.add("hidden");
                    });
                    return;
                }
            </script>