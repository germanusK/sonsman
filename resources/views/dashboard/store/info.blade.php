@extends('dashboard.store.template')
@section('store')
<div class="w-full h-full flex flex-col justify-center">
    <div class="mx-auto w-11/12 md:w-5/6 lg:w-3/4 rounded-xl bg-white bg-opacity-5 flex flex-wrap">
        <div class="hidden md:block w-2/5 rounded-l-xl h-full">
            <img src="{{url('img/img2.jpg')}}" alt="" class="w-full h-full rounded-l-xl">
        </div>
        <div class="w-full md:w-3/5 py-4 px-2 flex flex-col justify-center">
            <div class="w-full text-center">
                <div class="text-s font-bold text-large my-2">Store Name here</div>
                <div class="text-d font-bold text-medium mb-2">category here</div>
                <div class="text-d text-medium text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente veritatis enim quam sunt alias quae blanditiis saepe.</div>
                <div class="text-s text-small font-bold py-1">90 items, 782 visitors, date, rating</div>
            </div>
        </div>
    </div>
</div>
@endsection
