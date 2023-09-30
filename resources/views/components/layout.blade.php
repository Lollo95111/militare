<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
    <x-navbar></x-navbar>

    @if(session('message'))

    <div class="alert alert-success">{{session('message')}}</div>

    @endif

    @if (session('access.denied'))
    <div class="alert alert-danger">
        {{ session('access.denied') }}
    </div>
@endif

    {{$slot}}
    @livewireScripts
    <script src="https://kit.fontawesome.com/75bc6d0aee.js" crossorigin="anonymous"></script>
</body>
</html>
