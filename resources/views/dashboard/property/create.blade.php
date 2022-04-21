@extends('dashboard.main')
@section('content')
<?php 
    if (isset($_POST['submit'])) {
        # code...
        print_r($_POST);
    }
 ?>
<div class="w-full">
    <div class="w-full flex flex-wrap py-6 gap-4">
        <a type="button" href="{{url('/rest/property')}}" class="px-3 py-2 border-b border-white text-white rounded font-semibold"><span class="text-lg fas fa-arrow-left"></span></a>
    </div>
    <div class="flex align-middle items-center py-1 bg-white bg-opacity-20 rounded">
        <h3 class=" mx-auto text-xl font-semibold text-slate-200 px-4">Create Property</h3>
    </div>
    <div class="w-full">
        <div id="imageBar" class="w-full items-center justify-center flex whitespace-nowrap overflow-x-scroll no-scrollbar my-2">
        </div>
        <div class="w-full items-center justify-center py-6">
            <!-- <form action="{{ url('/rest/property/create') }}" enctype="multipart/form-data" method="post" class="rounded-md bg-white bg-opacity-10 py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30"> -->
            <form id="creationForm" action="" enctype="multipart/form-data" method="post" class="rounded-md bg-white bg-opacity-10 py-10 px-6 w-4/5 sm:3/5 mx-auto border-x border-black border-opacity-30">
                {{@csrf_field()}}
                <div class="w-full flex flex-wrap items-start justify-evenly">
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="name" class="text-white text-opacity-50 text-base">name:</label><br>
                        <input type="text" name="name" required id="" placeholder="item name here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="group" class="text-white text-opacity-50 text-base">group:</label><br>
                        <select name="group" required id="groupPicker" class=" w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 h-11">
                            <option value="" selected class="bg-white bg-opacity-10"></option>
                        </select>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="category" class="text-white text-opacity-50 text-base">category:</label><br>
                        <select name="category" required id="categoryPicker" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 h-11">
                            <option value="" selected class="bg-white bg-opacity-10"></option>
                            <option value="land" class="text-slate-300 bg-white bg-opacity-10">Land</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="grade" class="text-white text-opacity-50 text-base">grade:</label><br>
                        <select name="grade" id="gradePicker" placeholder="select grade" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                            <option value="" selected class="g-white bg-opacity-10">none</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="price" class="text-white text-opacity-50 text-base">price:</label><br>
                        <input type="text" required name="price" id="" placeholder="w-full item price here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11">
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="description" class="text-white text-opacity-50 text-base">description:</label><br>
                        <textarea rows="4" name="description" id="" placeholder="item description here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70"></textarea>
                    </div>
                    <div class="w-full sm:w-5/12 my-2">
                        <label for="images" class="text-white text-opacity-50 text-base">images:</label><br>
                        <input type="file" required multiple name="images[]" id="" placeholder="images here" class="w-full flex-auto bg-white bg-opacity-10 rounded text-white text-opacity-60 placeholder-white placeholder-opacity-70 h-11 py-2">
                    </div>
                    
                </div>
                <hr class=" opacity-30 w-2/3 mx-auto">
                <div class="w-full items-end justify-end flex px-6">
                    <button id="creationBtn" type="submit" name="submit" class="px-3 py-2 border-b border-white text-white rounded font-semibold">create</button>
                </div>
            </form>
            <script>
                $(document).ready(function(){

                    $("#gradePicker").load(
                        "{{Config::get('api_routes.api_grades')}}",
                        (resp, status, reqest)=>{
                            data = JSON.parse(resp);
                            for (let index = 0; index < data.length; index++) {
                                const element = array[index];
                                $("#gradePicker").append("<option value="+element.id+">"+element.grade+"</option>");
                            }
                        }
                    )
                    
                    $("#groupPicker").load(
                        "{{Config::get('api_routes.api_groups')}}",
                        (text, status, req)=>{
                            let data = JSON.parse(text);
                            for (let index = 0; index < data.length; index++) {
                                const element = data[index];
                                $("#groupPicker").append("<option value="+element.id+">"+element.group+"</option>");
                            }   
                        }
                    );

                    $("#groupPicker").change(()=>{
                        $("#categoryPicker").load(
                            "{{Config::get('api_routes.api_categories')}}/"+$("#groupPicker").val(),
                            (responseText, status, req)=>{
                                let data = JSON.parse(responseText);
                                for (let index = 0; index < data.length; index++) {
                                    const element = data[index];
                                    $("#categoryPicker").append("<option value="+element.id+">"+element.category+"</option>");
                                }
                            }
                        )
                    })

                    $("#creationForm").submit(function(e){
                        e.preventDefault();
                        $.post("{{Config::get('api_routes.api_properties')}}",
                            (new FormData(document.forms[0])),
                            function(data, textStatus, req){
                                alert(textStatus);
                                alert(JSON.stringify($data));
                            });
                        });

                    
                });
            </script>
        </div>
    </div>
</div>
@endsection