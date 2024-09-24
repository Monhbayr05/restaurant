<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--    css--}}
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
{{--    css--}}
    <link rel="stylesheet" href="{{asset('admin/assets/css/admin_2.css')}}">
{{--    bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
{{--    bootstrap--}}
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <title>Restaurant</title>
{{--    bootstrap icons--}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>
<body>
{{--navbar--}}
    @include('layouts.inc.admin.header')
{{--sidebar    --}}
    @include('layouts.inc.admin.sidebar')
    @yield('content')

</body>
</html>
