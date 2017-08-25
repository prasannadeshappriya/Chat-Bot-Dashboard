<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('css/main.css')}}">

        {{--Vendor files--}}
        <script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('js/bootstrap.js')}}"></script>
        <script src="{{url('js/angular.js')}}"></script>

        {{--Angular Modules--}}
        <script src="{{url('app/app.modules.js')}}"></script>

    <body ng-app="app">
        @yield('body')
    </body>
</html>
