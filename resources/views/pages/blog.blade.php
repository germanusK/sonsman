@extends('templates.page-template')
@section('page-content')
<div class="w-full blog">
    <div class="bl1 w-full flex flex-col justify-center ">
        <div class="w-full text-center text-xlarge text-s font-black capitalize py-3">sonsman blog</div>
    </div>
    <div class="w-full bg-p pt-12 pb-2 flex justify-center">
        <form action="post" class=" inline-flex w-fit mx-auto max-w-full flex-wrap">
            <div class="text-d text-medium capitalize px-2">Filter:</div>
            <div class="flex px-3 items-center align-middle">
                <label for="trending" class="text-s mr-2">trending:</label>
                <input type="checkbox" name="trending" id="trending-check" class="border border-s rounded bg-transparent align-baseline">
            </div>
            <div class="flex px-3 items-center align-middle">
                <label for="trending" class="text-s mr-2">most recent:</label>
                <input type="checkbox" name="trending" id="trending-check" class="border border-s rounded bg-transparent align-baseline">
            </div>
            <div class="flex px-3 items-center align-middle">
                <label for="trending" class="text-s mr-2">featuring:</label>
                <input type="checkbox" name="trending" id="trending-check" class="border border-s rounded bg-transparent align-baseline">
            </div>
        </form>
    </div>
    <div class="md:flex w-full bl2 py-8">
        <div class="w-full md:w-1/3 ">
            <div class="text-s text-large capitalize px-2 text-center font-bold">Topics & Categories</div>
            <div class="w-full whitespace-nowrap overflow-x-scroll md:overflow-x-clip flex md:block justify-center py-1 mini-scrollbar">
                <ul class="w-fit md:w-full flex md:flex-wrap list-none md:block gap-x-2 gap-y-1 text-ellipsis text-p">
                    <li class="px-2 md:py-1 mx-1 my-1 md:w-5/6 md:mx-auto text-medium bg-white bg-opacity-70 rounded-l-full rounded-r-full md:rounded cursor-move border-x border-p">List item</li>
                    <li class="px-2 md:py-1 mx-1 my-1 md:w-5/6 md:mx-auto text-medium bg-white bg-opacity-70 rounded-l-full rounded-r-full md:rounded cursor-move border-x border-p">List item</li>
                    <li class="px-2 md:py-1 mx-1 my-1 md:w-5/6 md:mx-auto text-medium bg-white bg-opacity-70 rounded-l-full rounded-r-full md:rounded cursor-move border-x border-p">List item</li>
                    <li class="px-2 md:py-1 mx-1 my-1 md:w-5/6 md:mx-auto text-medium bg-white bg-opacity-70 rounded-l-full rounded-r-full md:rounded cursor-move border-x border-p">List item</li>
                    <li class="px-2 md:py-1 mx-1 my-1 md:w-5/6 md:mx-auto text-medium bg-white bg-opacity-70 rounded-l-full rounded-r-full md:rounded cursor-move border-x border-p">List item</li>
                    <li class="px-2 md:py-1 mx-1 my-1 md:w-5/6 md:mx-auto text-medium bg-white bg-opacity-70 rounded-l-full rounded-r-full md:rounded cursor-move border-x border-p">List item</li>
                </ul>
            </div>
        </div>
        <div class="w-full md:w-2/3">
            <div class="w-full md:min-h-screen px-2">
                <!-- Blog item -->
                <div class="w-full rounded-md overflow-clip md:flex bg-d p-1 my-2">
                    <div class="md:w-1/4 md:h-full flex flex-col justify-center">
                        <img src="{{asset('img/mohammad.jpg')}}" alt="" class="w-auto max-w-full h-60 mx-auto md:w-full md:h-auto max-h-full rounded-md">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col justify-center text-center md:min-h-full text-p  font-semibold border border-d rounded-md">
                        <div class="w-full flex flex-wrap py-1 bg-p text-d rounded-t-md">
                            <span class="w-full text-large underline font-bold title">title here</span>
                            <i class="text-base w-full">by <strong class="author text-s">author here</strong>, created: <strong class="publish text-s">date 1</strong>, last update: <strong class="update text-s">date 2</strong></i>
                        </div>
                        <div class="w-full text-medium border-x border-p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus et repellat dolorum, suscipit accusamus. Doloremque fugiat tenetur magnam at earum est natus voluptatibus quia neque aut. A, possimus placeat!
                            Vero doloribus non tempora hic rerum enim omnis sint natus adipisci? Voluptatibus error, hic tempora, fuga quaerat numquam corporis dignissimos quidem non tempore ipsa sit expedita nobis. Obcaecati, nisi possimus.
                            Quam eum exercitationem, hic magnam ullam eos. Fugit obcaecati facere similique rerum eveniet praesentium, repellat perferendis numquam voluptates. Recusandae aperiam aliquid maiores magni aliquam? Quisquam pariatur quo accusamus inventore quidem!
                        </div>
                        <div class="w-full bg-p text-s rounded-b-md py-1 gap-2">
                            <a href="" class="link underline">sample link </a>
                            <button class=" rounded border border-s px-2" title="preview"><span class="fas fa-eye"></span></button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/6 flex justify-center md:flex-col rounded-md md:min-h-full  bg-p text-d text-center">rxns here</div>
                </div>
                <!-- Blog item -->
                <div class="w-full rounded-md overflow-clip md:flex bg-d p-1 my-2">
                    <div class="md:w-1/4 md:h-full flex flex-col justify-center">
                        <img src="{{asset('img/mohammad.jpg')}}" alt="" class="w-auto max-w-full h-60 mx-auto md:w-full md:h-auto max-h-full rounded-md">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col justify-center text-center md:min-h-full text-p  font-semibold border border-d rounded-md">
                        <div class="w-full flex flex-wrap py-1 bg-p text-d rounded-t-md">
                            <span class="w-full text-large underline font-bold title">title here</span>
                            <i class="text-base w-full">by <strong class="author text-s">author here</strong>, created: <strong class="publish text-s">date 1</strong>, last update: <strong class="update text-s">date 2</strong></i>
                        </div>
                        <div class="w-full text-medium border-x border-p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus et repellat dolorum, suscipit accusamus. Doloremque fugiat tenetur magnam at earum est natus voluptatibus quia neque aut. A, possimus placeat!
                            Vero doloribus non tempora hic rerum enim omnis sint natus adipisci? Voluptatibus error, hic tempora, fuga quaerat numquam corporis dignissimos quidem non tempore ipsa sit expedita nobis. Obcaecati, nisi possimus.
                            Quam eum exercitationem, hic magnam ullam eos. Fugit obcaecati facere similique rerum eveniet praesentium, repellat perferendis numquam voluptates. Recusandae aperiam aliquid maiores magni aliquam? Quisquam pariatur quo accusamus inventore quidem!
                        </div>
                        <div class="w-full bg-p text-s rounded-b-md py-1 gap-2">
                            <a href="" class="link underline">sample link </a>
                            <button class=" rounded border border-s px-2" title="preview"><span class="fas fa-eye"></span></button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/6 flex justify-center md:flex-col rounded-md md:min-h-full  bg-p text-d text-center">rxns here</div>
                </div>
                <!-- Blog item -->
                <div class="w-full rounded-md overflow-clip md:flex bg-d p-1 my-2">
                    <div class="md:w-1/4 md:h-full flex flex-col justify-center">
                        <img src="{{asset('img/mohammad.jpg')}}" alt="" class="w-auto max-w-full h-60 mx-auto md:w-full md:h-auto max-h-full rounded-md">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col justify-center text-center md:min-h-full text-p  font-semibold border border-d rounded-md">
                        <div class="w-full flex flex-wrap py-1 bg-p text-d rounded-t-md">
                            <span class="w-full text-large underline font-bold title">title here</span>
                            <i class="text-base w-full">by <strong class="author text-s">author here</strong>, created: <strong class="publish text-s">date 1</strong>, last update: <strong class="update text-s">date 2</strong></i>
                        </div>
                        <div class="w-full text-medium border-x border-p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus et repellat dolorum, suscipit accusamus. Doloremque fugiat tenetur magnam at earum est natus voluptatibus quia neque aut. A, possimus placeat!
                            Vero doloribus non tempora hic rerum enim omnis sint natus adipisci? Voluptatibus error, hic tempora, fuga quaerat numquam corporis dignissimos quidem non tempore ipsa sit expedita nobis. Obcaecati, nisi possimus.
                            Quam eum exercitationem, hic magnam ullam eos. Fugit obcaecati facere similique rerum eveniet praesentium, repellat perferendis numquam voluptates. Recusandae aperiam aliquid maiores magni aliquam? Quisquam pariatur quo accusamus inventore quidem!
                        </div>
                        <div class="w-full bg-p text-s rounded-b-md py-1 gap-2">
                            <a href="" class="link underline">sample link </a>
                            <button class=" rounded border border-s px-2" title="preview"><span class="fas fa-eye"></span></button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/6 flex justify-center md:flex-col rounded-md md:min-h-full  bg-p text-d text-center">rxns here</div>
                </div>
                <!-- Blog item -->
                <div class="w-full rounded-md overflow-clip md:flex bg-d p-1 my-2">
                    <div class="md:w-1/4 md:h-full flex flex-col justify-center">
                        <img src="{{asset('img/mohammad.jpg')}}" alt="" class="w-auto max-w-full h-60 mx-auto md:w-full md:h-auto max-h-full rounded-md">
                    </div>
                    <div class="w-full md:w-7/12 flex flex-col justify-center text-center md:min-h-full text-p  font-semibold border border-d rounded-md">
                        <div class="w-full flex flex-wrap py-1 bg-p text-d rounded-t-md">
                            <span class="w-full text-large underline font-bold title">title here</span>
                            <i class="text-base w-full">by <strong class="author text-s">author here</strong>, created: <strong class="publish text-s">date 1</strong>, last update: <strong class="update text-s">date 2</strong></i>
                        </div>
                        <div class="w-full text-medium border-x border-p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus et repellat dolorum, suscipit accusamus. Doloremque fugiat tenetur magnam at earum est natus voluptatibus quia neque aut. A, possimus placeat!
                            Vero doloribus non tempora hic rerum enim omnis sint natus adipisci? Voluptatibus error, hic tempora, fuga quaerat numquam corporis dignissimos quidem non tempore ipsa sit expedita nobis. Obcaecati, nisi possimus.
                            Quam eum exercitationem, hic magnam ullam eos. Fugit obcaecati facere similique rerum eveniet praesentium, repellat perferendis numquam voluptates. Recusandae aperiam aliquid maiores magni aliquam? Quisquam pariatur quo accusamus inventore quidem!
                        </div>
                        <div class="w-full bg-p text-s rounded-b-md py-1 gap-2">
                            <a href="" class="link underline">sample link </a>
                            <button class=" rounded border border-s px-2" title="preview"><span class="fas fa-eye"></span></button>
                        </div>
                    </div>
                    <div class="w-full md:w-1/6 flex justify-center md:flex-col rounded-md md:min-h-full  bg-p text-d text-center">rxns here</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
