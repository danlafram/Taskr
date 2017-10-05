<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        {{-- <link href="css/" rel="stylesheet"> --}}
        <!-- Bootstrap core CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <body id="" class="">
    
        @include('layouts.partials._navigation')
    
        @include('layouts.partials._header')
    
        @yield('content')
    
        @include('layouts.partials._footer')
    
    </body>
</html>