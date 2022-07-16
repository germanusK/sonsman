@extends('templates.page-template')
@section('page-content')
<div class="w-full">
    <div class="ql1 w-full flex flex-col justify-center py-12">
        <div class="w-full text-center text-xlarge text-s font-black capitalize py-3">Sonsman Quotes</div>
        <div class="w-full pt-10 flex justify-center">
            <div class="w-52 h-20 relative mx-auto flex flex-col justify-end">
                <span class=" w-1/2 h-2/5 border-4 border-t-0 border-s rounded-b-xl absolute left-1/4 top-0 text-large text-center text-s bg-p font-bold flex flex-col justify-center">500</span>
                <div class="w-3/4 h-4/5 mx-auto border-4 border-s rounded-xl capitalize bg-p text-s text-large text-center flex flex-col justify-center font-semibold">Quotes</div>
            </div>
        </div>
    </div>
    <div class="w-full bg-d py-12">
        <div class="w-full text-center text-s text-xlarge font-semibold capitalize">trending quotes</div>
        <div class="w-full flex justify-center whitespace-nowrap overflow-x-scroll py-3">
            <div class="w-fit lg:w-full flex-wrap flex py-3 justify-center">
                <!-- quote item -->
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 right-0"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-p py-12">
        <div class="w-full text-center text-s text-xlarge font-semibold capitalize">Featuring quotes</div>
        <div class="w-full flex justify-center whitespace-nowrap overflow-x-scroll py-3">
            <div class="w-fit lg:w-full flex flex-wrap py-3 justify-center">
                <!-- quote item -->
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 right-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 left-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 right-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 left-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 right-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 left-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 right-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 left-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 right-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 left-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md top-0 right-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md bottom-0 left-0"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="ql2 w-full bg-d py-12">
        <div class="w-full pl-12 text-d text-large font-semibold">Filter quotes:
            <form action="post" class=" inline-flex flex-wrap">
                <div class="w-fit h-auto p-1 relative">
                    <label for="author" class="text-base text-s">Author:</label>
                    <input type="text" name="author" placeholder="author" class="text-d border-0 border-b border-s bg-transparent">
                    <!-- author suggestion box -->
                    <div class="w-full absolute bg-p border border-x-2  border-d rounded px-3 text-justify top-full text-d text-base z-50">Author suggestion box on filling author field</div>
                </div>
                <div class="w-fit h-auto p-1">
                    <label for="date" class="text-base text-s">Date:</label>
                    <input type="date" name="date" placeholder="date" class="text-d border-0 border-b border-s bg-transparent">
                </div>
                <div class="w-fit h-auto p-1">
                    <label for="sort-by" class="text-base text-s">Sort by:</label>
                    <select name="sort-by" class="text-d border-0 border-b border-s bg-transparent">
                        <option class="text-s bg-p border-y border-s" value="" selected></option>
                        <option class="text-s bg-p border-y border-s" value="most-viewed">most viewed</option>
                        <option class="text-s bg-p border-y border-s" value="most-rated">most rated</option>
                        <option class="text-s bg-p border-y border-s" value="trending">trending</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="w-full flex justify-center whitespace-nowrap overflow-x-scroll py-3">
            <div class="w-fit lg:w-full flex justify-center flex-wrap py-3">
                <!-- quote item -->
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md bottom-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md top-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md bottom-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md top-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md bottom-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md top-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md bottom-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md top-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md bottom-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md top-0 right-0"></div>
                </div>
                <div class="w-60 h-56 relative mx-4 my-5">
                    <div class="absolute w-11/12 h-48 bg-p border-4 border-s text-s font-semibold rounded-md bottom-0 left-0 flex flex-col justify-center text-center z-10">quote goes here</div>
                    <div class="absolute w-11/12 h-48 bg-s border border-p rounded-md top-0 right-0"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

text-5xl
