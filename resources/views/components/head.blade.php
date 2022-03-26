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