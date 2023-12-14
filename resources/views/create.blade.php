<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Like Page
    </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class=" flex relative justify-center items-center gap-2 flex-col min-h-screen w-full ">
    @include('layouts.navbar')
    <form action="/add" method="POST" class="flex flex-col justify-center w-96 items-center gap-2">
        @csrf
        <input
        class=" outline-none border text-zinc-600 rounded-md p-2 w-full border-slate-100  px-3 py-2"
        type="text" name="id" id="" placeholder="id">
        <input
        class=" outline-none border text-zinc-600 rounded-md p-2 w-full border-slate-100  px-3 py-2"
        type="text" name="full_name" id="" placeholder="full name">
        <input
        class=" outline-none border text-zinc-600 rounded-md p-2 w-full border-slate-100  px-3 py-2"
        type="text" name="phone_number" id="" placeholder="phone number">
        <input
        class=" outline-none border text-zinc-600 rounded-md p-2 w-full border-slate-100  px-3 py-2"
        type="text" name="email" id="" placeholder="email">
        <input
        class=" outline-none border text-zinc-600 rounded-md p-2 w-full border-slate-100  px-3 py-2"
        type="text" name="company" id="" placeholder="company">
        <textarea
        class=" outline-none border text-zinc-600 rounded-md p-2 w-full border-slate-100  px-3 py-2"
         name="address" id="" placeholder="address"
         cols="10" rows="5">

        </textarea>
        <select
        class="w-full outline-none border text-zinc-600 rounded-md p-2 border-slate-100  px-3 py-2"
        name="" id="">
            <option value="">company 1</option>
            <option value="">company 2</option>
            <option value="">company 3</option>
            <option value="">company 4</option>
        </select>
        <button
        type="submit"
        class="btn btn-primary w-full">
            add
        </button>    
</body>

</html>
