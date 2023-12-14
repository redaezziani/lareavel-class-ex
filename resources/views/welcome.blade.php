<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        The First App
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class=" flex justify-center relative items-center gap-2 flex-col min-h-screen w-full ">
    @include('layouts.navbar')
    <div class="flex justify-start items-center flex-col  gap-3">
        <h1 class="text-3xl font-semibold text-zinc-800">
            Welcome to Contacts manager 
        </h1>
        <div class="flex gap-3 w-full justify-center">
            <a href="/login">
                <button class="btn btn-primary-border">
                    login
                </button>
            </a>
            <a href="/register">
                <button class="btn btn-primary">
                    register
                </button>
            </a>
        </div>
        <p
        class=" text-zinc-400"
        >
            This is a simple contacts manager app built with laravel and tailwindcss
        </p>
    </div>
</body>

</html>
