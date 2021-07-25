<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @include('cetak.layout.style');
    </style>
    
    <title>
        E-Surat
    </title>
</head>
<body>
    @include('cetak.layout.header')
    @yield('content')
    @include('cetak.layout.footer')
    
</body>
</html>