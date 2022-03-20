<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Property Trust</title>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('fontawesome-free-5.3.1/css/all.min.css') }}">
		<style>
			.carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
			}
            body {
                font-family: 'Nunito', sans-serif;
            }
            .h-85sc{
                height: 85vh;
            }
            .min-h-75sc{
                min-height: 75vh;
            }
            .no-scrollbar::-webkit-scrollbar{
                display: none;
            }
            .prop:hover .action-btn{
                display: block;
                transition: all ease-in-out 0.8s;
            }
        </style>
    </head>
    <body class=" min-h-screen">

        <!-- PAGE HEADER -->
        <div class="w-full h-auto bg-gradient-to-r from-black to-current">
            <div class="w-full h-auto bg-white text-blue-800">
                <div class="h-full w-11/12 flex align-middle items-center mx-auto">
                    <div class=" h-auto w-fit px-16 xs:block justify-center text-2xl italic font-semibomd">
                        <img src="{{ asset('img/logo1.jpg') }}" alt="LOGO" class="w-12 h-auto">
                    </div> 
                    <div class=" h-fit w-fit inline-block md:flex flex-wrap justify-end text-lg  font-normal flex-auto gap-x-2 gap-y-2 divide-blue-600 bg-transparent">
                        <a href="{{ url('') }}" class="block lg:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Home</a>
                        <a href="{{ url('') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Our Property</a>
                        <a href="{{ url('') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">General Commerce</a>
                        <a href="{{ url('') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">About</a>
                        <a href="{{ url('') }}" class="block md:inline-flex no-underline px-4 py-1 mx-2 h-fit md:bg-transparent">Contact</a>
                        <button class="block md:inline-flex no-underline px-2 mx-2 my-2 rounded-3xl border-2 border-blue-800 h-fit md:bg-transparent">search</button>
                     </div>
                </div>
            </div>

            <div class="w-full min-h-screen relative ">
                <div class="w-1/2 h-1/2  align-bottom items-end justify-end flex absolute bottom-0 left-0 px-2 py-2 bg-stone-900">
                    <div class="w-fit mx-auto">
                        <div class="text-center py-4">
                            <div class="py-2 text-white text-3xl md:text-4xl font-semibold italic text-ellipsis flex-wrap">Welcome To <span class="text-pink-700">Property Trust</span></div>
                            <div class="text-2xl text-slate-200 italic text-center flex-wrap">Where real property comes home</div>
                        </div>
                        <div class="w-full flex items-center justify-center py-4">
                            <div class="grid sm:grid-cols-2 gap-5 text-xl font-semibold">
                                <a href="" class=" inline-flex flex-auto sm:inline-block px-5 py-2 rounded text-center text-ellipsis w-auto bg-white text-blue-800 ">View Property</a>
                                <a href="" class=" inline-flex flex-auto sm:inline-block px-5 py-2 rounded text-center text-ellipsis w-auto bg-white text-blue-800">Real Market</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-full right-0 bottom-0 left-auto absolute bg-slate-300 z-0 align-bottom items-end justify-end flex py-2">
                    <div class="w-4/5 mx-auto h-1/2 flex align-middle items-center justify-center text-center text-ellipsis line-clamp-3 text-4xl font-semibold">
                        Don't wait to buy real estate, Buy real estate and wait
                    </div>
                </div>
                <div class="w-11/12 h-3/5 absolute top-0 left-0 right-auto rounded-br-full z-10 bg-white pb-2 pr-2">
                    <div class="w-full h-full rounded-br-full border-b-8 border-r-8 border-stone-900 bg-stone-900 items-center align-middle justify-center flex">
                        <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover rounded-br-full">
                    </div>
                </div>
                <div class="w-2/5 absolute flex top-0 right-0 border-b-8 border-l-8 rounded-bl-full border-white z-20 bg-stone-900 justify-center items-center align-middle flex-wrap pl-4">
                    <div class=" h-auto rounded-t-full mx-4 my-2 justify-center items-center">
                        <img src="{{ asset('img/logo1.jpg') }}" class="w-12 h-12 rounded-t-full mx-auto">
                        <p class="text-center text-sm text-slate-100">where real property comes home</p>
                    </div>
                    <a href="{{ url('') }}" class="mx-4"><span class="text-4xl font-semibold text-slate-200 fas fa-home"></span></a>
                </div>
            </div>

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
            <div class="w-11/12 md:w-5/6 mx-auto text-slate-100 text-center">Don't think about it's current value. Think about it's future value</div>
            <!-- Horizontal scrolling container -->
            <div class="w-11/12 md:w-5/6 h-96 md:h-3/4 mx-auto my-4 ">
                <div class="w-full h-full flex whitespace-nowrap overflow-x-scroll no-scrollbar">
                    <!-- Horizontal scroll item -->
                    <div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600">
                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="w-full h-full items-center align-middle justify-center flex">
                                <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover">
                            </div>
                        </div>
                        <div class="w-full h-2/5 absolute flex bottom-0 left-0 rounded-tr-full z-20 bg-blue-900 pr-2 pt-2">
                            <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-full flex">
                                <div class="w-1/2 h-full bg-stone-900 flex items-center align-middle justify-center">
                                    <div class="h-fit max-h-full w-11/12 text-center">
                                        <div class="text-slate-100 text-nm font-semibold text-ellipsis">Property Name</div>
                                        <p class="text-slate-200 italic text-sm line-clamp-3 break-words text-ellipsis">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each</p>
                                    </div>
                                </div>
                                <div class="w-1/2 h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-full">
                                    <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal scroll item -->
                    <div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600">
                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="w-full h-full items-center align-middle justify-center flex">
                                <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover">
                            </div>
                        </div>
                        <div class="w-full h-2/5 absolute flex bottom-0 left-0 rounded-tr-full z-20 bg-blue-900 pr-2 pt-2">
                            <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-full flex">
                                <div class="w-1/2 h-full bg-stone-900 flex items-center align-middle justify-center">
                                    <div class="h-fit max-h-full w-11/12 text-center">
                                        <div class="text-slate-100 text-nm font-semibold text-ellipsis">Property Name</div>
                                        <p class="text-slate-200 italic text-sm line-clamp-3 break-words text-ellipsis">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each</p>
                                    </div>
                                </div>
                                <div class="w-1/2 h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-full">
                                    <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal scroll item -->
                    <div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600">
                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="w-full h-full items-center align-middle justify-center flex">
                                <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover">
                            </div>
                        </div>
                        <div class="w-full h-2/5 absolute flex bottom-0 left-0 rounded-tr-full z-20 bg-blue-900 pr-2 pt-2">
                            <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-full flex">
                                <div class="w-1/2 h-full bg-stone-900 flex items-center align-middle justify-center">
                                    <div class="h-fit max-h-full w-11/12 text-center">
                                        <div class="text-slate-100 text-nm font-semibold text-ellipsis">Property Name</div>
                                        <p class="text-slate-200 italic text-sm line-clamp-3 break-words text-ellipsis">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each</p>
                                    </div>
                                </div>
                                <div class="w-1/2 h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-full">
                                    <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal scroll item -->
                    <div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600">
                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="w-full h-full items-center align-middle justify-center flex">
                                <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover">
                            </div>
                        </div>
                        <div class="w-full h-2/5 absolute flex bottom-0 left-0 rounded-tr-full z-20 bg-blue-900 pr-2 pt-2">
                            <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-full flex">
                                <div class="w-1/2 h-full bg-stone-900 flex items-center align-middle justify-center">
                                    <div class="h-fit max-h-full w-11/12 text-center">
                                        <div class="text-slate-100 text-nm font-semibold text-ellipsis">Property Name</div>
                                        <p class="text-slate-200 italic text-sm line-clamp-3 break-words text-ellipsis">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each</p>
                                    </div>
                                </div>
                                <div class="w-1/2 h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-full">
                                    <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal scroll item -->
                    <div class="w-11/12 md:w-96 mx-6 h-full flex-shrink-0 relative bg-stone-600">
                        <div class="w-full h-full absolute top-0 left-0">
                            <div class="w-full h-full items-center align-middle justify-center flex">
                                <img src="{{ asset('img/home.jpg') }}" class="w-full h-full overflow-hidden object-cover">
                            </div>
                        </div>
                        <div class="w-full h-2/5 absolute flex bottom-0 left-0 rounded-tr-full z-20 bg-blue-900 pr-2 pt-2">
                            <div class="w-full h-full border-t-8 border-r-8 border-slate-700 rounded-tr-full flex">
                                <div class="w-1/2 h-full bg-stone-900 flex items-center align-middle justify-center">
                                    <div class="h-fit max-h-full w-11/12 text-center">
                                        <div class="text-slate-100 text-nm font-semibold text-ellipsis">Property Name</div>
                                        <p class="text-slate-200 italic text-sm line-clamp-3 break-words text-ellipsis">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each</p>
                                    </div>
                                </div>
                                <div class="w-1/2 h-full bg-gray-900 flex items-end justify-start align-middle rounded-tr-full">
                                    <div class="h-fit max-h-full w-4/5 flex flex-wrap justify-start items-center">
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Preview</a>
                                        <a href="{{ url('') }}" class="mx-2 my-1 border border-slate-50 rounded bg-gray-900 text-slate-50 w-2/5 py-1 min-w-fit px-2">Book Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Others -->
        <div class="w-11/12 md:w-5/6 h-auto grid grid-cols-6 mx-auto py-12">
            <div class="col-span-6 sm:col-span-3 md:col-span-2 h-auto px-3 py-6">
                <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
                    <div class="w-full h-80 p-2 rounded-lg items-center align-middle justify-center flex">
                        <img src="{{ asset('img/contemporary.jpg') }}" alt="failed to load image " class="min-w-full min-h-full object-cover overflow-hidden rounded-t-lg">
                    </div>
                    <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-gray-900 mt-2">
                        <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1">Property Name</div>
                        <div class="text-slate-100 text-lg text-center line-clamp-4">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each breakpoint, perfected the whitespace and typography, and the photography you’re using is really bringing the design to life.</div>
                    </div>
                    <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                        <a href="{{ url('') }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-3 md:col-span-2 h-auto px-3 py-6">
                <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
                    <div class="w-full h-80 p-2 rounded-lg items-center align-middle justify-center flex">
                        <img src="{{ asset('img/contemporary.jpg') }}" alt="failed to load image " class="min-w-full min-h-full object-cover overflow-hidden rounded-t-lg">
                    </div>
                    <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-gray-900 mt-2">
                        <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1">Property Name</div>
                        <div class="text-slate-100 text-lg text-center line-clamp-4">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each breakpoint, perfected the whitespace and typography, and the photography you’re using is really bringing the design to life.</div>
                    </div>
                    <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                        <a href="{{ url('') }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-3 md:col-span-2 h-auto px-3 py-6">
                <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
                    <div class="w-full h-80 p-2 rounded-lg items-center align-middle justify-center flex">
                        <img src="{{ asset('img/contemporary.jpg') }}" alt="failed to load image " class="min-w-full min-h-full object-cover overflow-hidden rounded-t-lg">
                    </div>
                    <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-gray-900 mt-2">
                        <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1">Property Name</div>
                        <div class="text-slate-100 text-lg text-center line-clamp-4">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each breakpoint, perfected the whitespace and typography, and the photography you’re using is really bringing the design to life.</div>
                    </div>
                    <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                        <a href="{{ url('') }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-3 md:col-span-2 h-auto px-3 py-6">
                <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
                    <div class="w-full h-80 p-2 rounded-lg items-center align-middle justify-center flex">
                        <img src="{{ asset('img/contemporary.jpg') }}" alt="failed to load image " class="min-w-full min-h-full object-cover overflow-hidden rounded-t-lg">
                    </div>
                    <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-gray-900 mt-2">
                        <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1">Property Name</div>
                        <div class="text-slate-100 text-lg text-center line-clamp-4">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each breakpoint, perfected the whitespace and typography, and the photography you’re using is really bringing the design to life.</div>
                    </div>
                    <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                        <a href="{{ url('') }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-3 md:col-span-2 h-auto px-3 py-6">
                <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
                    <div class="w-full h-80 p-2 rounded-lg items-center align-middle justify-center flex">
                        <img src="{{ asset('img/contemporary.jpg') }}" alt="failed to load image " class="min-w-full min-h-full object-cover overflow-hidden rounded-t-lg">
                    </div>
                    <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-gray-900 mt-2">
                        <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1">Property Name</div>
                        <div class="text-slate-100 text-lg text-center line-clamp-4">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each breakpoint, perfected the whitespace and typography, and the photography you’re using is really bringing the design to life.</div>
                    </div>
                    <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                        <a href="{{ url('') }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-3 md:col-span-2 h-auto px-3 py-6">
                <div class="prop w-full h-auto bg-stone-900 rounded-lg border-4 border-stone-300 hover:border-gray-600 border-double relative">
                    <div class="w-full h-80 p-2 rounded-lg items-center align-middle justify-center flex">
                        <img src="{{ asset('img/contemporary.jpg') }}" alt="failed to load image " class="min-w-full min-h-full object-cover overflow-hidden rounded-t-lg">
                    </div>
                    <div class="w-full h-auto py-2 border-t-2 border-white rounded-t-xl rounded-b-lg bg-gray-900 mt-2">
                        <div class="text-slate-50 text-xl font-semibold text-center text-ellipsis py-1">Property Name</div>
                        <div class="text-slate-100 text-lg text-center line-clamp-4">Imagine you’re implementing a beautiful design you or someone on your team carefully crafted in Figma. You’ve nailed all the different layouts at each breakpoint, perfected the whitespace and typography, and the photography you’re using is really bringing the design to life.</div>
                    </div>
                    <div class="action-btn hidden absolute w-full h-auto left-0 right-0 mx-auto bottom-2 bg-stone-900">
                        <a href="{{ url('') }}" class="w-2/5 block mx-auto my-3 py-1 px-3 rounded text-center border border-white text-white">preview</a>
                    </div>
                </div>
            </div>
            
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
                        <form action="" method="post" class="w-full flex flex-wrap justify-center items-center">
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
                        <form action="" method="post" class="w-full flex flex-wrap justify-center items-center">
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
                        <form action="" method="post" class="w-full flex flex-wrap justify-center items-center">
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
        </div>

        <!-- Subscription and footer-->
        <div class="w-full h-auto bg-stone-900">
            <div class="w-11/12 md:w-5/6 h-auto mx-auto py-4 flex justify-evenly">
                <div class="flex flex-wrap my-4 mx-auto align-middle items-center">
                    <div class="text-center text-2xl text-white text-opacity-50 font-semibold px-4">Subscribe for updates</div>
                    <form class=" px-3 py-2 border-l border-l-white justify-evenly w-72" method="post" action="">
                        <div class="w-full">
                            <input type="email" name="email" id="" placeholder="Enter email address" class=" placeholder-slate-900 px-2 py-1 w-full my-2 bg-white rounded focus:border-collapse">
                            <button type="submit" class="px-3 py-1 bg-blue-300 rounded">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- footer -->
            <div class="w-11/12 md:w-5/6 h-auto mx-auto py-4 justify-evenly">
                <hr class="w-full my-4">
                <div class="w-full flex flex-wrap justify-evenly align-middle items-center gap-4 divide-opacity-10 divide-x-2 divide-white">
                    <div class=" md:max-w-sm py-2 px-3">
                        <div class="w-full py-1 text-xl text-white text-center text-opacity-70">About</div>
                        <div class="text-white text-opacity-50">Bproperty_trust is a dealer in real estate and general commerce, the king of real estate in Fako</div>
                    </div>
                    <div class="md:max-w-sm py-2 px-3">
                        <div class="w-full py-1 text-xl text-white text-center text-opacity-70">See you here!</div>
                        <div class="w-full flex flex-wrap justify-evenly items-center">
                            <a href="" class=" inline-block mx-3 text-white">
                                <span class="text-blue-300  text-4xl fab fa-facebook"></span>
                            </a>
                            <a href="" class=" inline-block mx-3 text-white">
                                <span class="text-blue-300  text-4xl fab fa-twitter"></span>
                            </a>
                            <a href="" class=" inline-block mx-3 text-white">
                                <span class="text-blue-300  text-4xl fab fa-whatsapp"></span>
                            </a>
                            <a href="" class=" inline-block mx-3 text-white">
                                <span class="text-blue-300  text-4xl fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
    </body>
</html>
