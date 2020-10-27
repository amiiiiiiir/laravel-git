@extends('layouts.app')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
    div{
        text-align: center;
    }
    </style>
        <body>
            @section('content')
                <h1>خوش آمدید</h1>
                <h3>id is : {{$id}}</h3>
                <h3>name is : {{$name}}</h3>
                <h3>password is : {{$password}}</h3>
            @endsection('content)
    @section('footer')
        <p> foooterrrr </p>
    @endsection('footer)
    </body>
</html>
