@extends('auth.auth-template')

@section('auth-form')
<div class="w-full h-full flex flex-col justify-center">
    <form action="" method="post" class="block w-2/3 mx-auto rounded-xl border-4 border-d py-4 px-2 bg-p">
        <div class="w-full text-center text-s text-medium py-2">a reset code will be sent to <span class="linkreset-email">abc@sonsman.com </span></div>
        <div class="py-3 w-full">
            <div class="pb-3 w-full relative">
                <label for="username" class="text-small text-s font-semibold right-0 top-0">edit</label>
                <input type="text" name="username" placeholder="edit email" disabled class="w-full text-d text-medium text-center border-0 border-b border0-d bg-transparent">
            </div>
            <div class="flex justify-end w-full pt-2">
                <button type="submit" class="rounded-lg text-medium font-black text-s border-x hover:bg-slate-900 border-s px-3" title="sign in"><span class="fas fa-redo"></span> get reset link</button>
            </div>
        </div>
        <div class="w-full text-d text-small flex justify-around gap-4">
            <a href="{{url('forgot-password')}}">use sms</a>
            <a href="{{url('login')}}">login</a>
        </div>
    </form>
</div>
@endsection

@section('auth-bg')
<div class="w-full h-full bg-p flex flex-col justify-center px-4 py-6">
    <div class="w-full md:w-3/4 mx-auto text-center rounded-xl py-5 px-1 text-p bg-s font-black text-3xl md:text-5xl">Password reset</div>
</div>
@endsection
