<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>

/*
You can now use this layout file as a template for your other views by extending it with the @extends directive. 
For example, if you have a home.blade.php file in your resources/views directory that you want to use with the 
app.blade.php layout, you can add the following code to the home.blade.php file:

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- your home page content goes here -->
@endsection

*/