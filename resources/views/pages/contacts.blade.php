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
    <div class=" w-full max-w-[90rem] text-blue-900 flex justify-between  items-center gap-2">
        <h2 class=" text-3xl font-semibold text-white">
            All contacts
        </h2>
        <a href="/create">
            <button class=" border rounded-full  p-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 text-green-400 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

            </button>
        </a>
    </div>
    <div class=" w-full max-w-[90rem] mt-3 flex  justify-end  items-center gap-2">
        <select class="w-72 outline-none border text-zinc-600 rounded-md p-2 border-slate-100  px-3 py-2" name=""
            id="">
            <option value="">all</option>
            <option value="">company 1</option>
            <option value="">company 2</option>
            <option value="">company 3</option>
            <option value="">company 4</option>
        </select>
        <div class="serach-input flex justify-between items-center rounded-md border ">
            <input class="w-72 outline-none border text-zinc-600 rounded-md p-2 border-slate-100  px-3 py-2"
                type="text" name="" id="" placeholder="search">
            <button class="btn btn-primary">
                search
            </button>
        </div>
    </div>
    <div class=" w-full  max-w-[90rem] flex mt-5 flex-col justify-start  items-start gap-2">
        <div class="flex justify-between p-1 rounded-lg border items-center gap-2 w-full">

            <div class=" min-w-[13rem] w-full rounded-md px-3 py-2.5   text-center text-zinc-600 bg-slate-100 ">
                id
            </div>
            <div class=" min-w-[13rem] w-full rounded-md px-3 py-2.5   text-center text-zinc-600 bg-slate-100 ">
                full name
            </div>
            <div class=" min-w-[13rem] w-full rounded-md px-3 py-2.5   text-center text-zinc-600 bg-slate-100 ">
                phone number
            </div>

            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600 bg-slate-100 ">
                email
            </div>

            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600 bg-slate-100 ">
                company
            </div>

            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600 bg-slate-100 ">
                actions
            </div>
        </div>
        <div class="flex justify-between p-1 rounded-lg bg-slate-50 mt-2  items-center gap-2 w-full">
            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600  ">
                <p>
                    1
                </p>
            </div>
            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600  ">
                <p>
                    John Doe
                </p>
            </div>
            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600  ">
                <p>
                    123456789
                </p>
            </div>
            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600  ">
                <p>
                    admin@gmail.com
                </p>
            </div>
            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600  ">
                <p>
                    company 1
                </p>
            </div>
            <div class=" min-w-[13rem]  w-full rounded-md px-3 py-2.5   text-center text-zinc-600  ">
                <div class="flex justify-between items-center gap-2">
                    <a href="/show">
                        <button class=" text-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>


                        </button>
                    </a>
                    <a href="/edit">
                        <button class=" text-green-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>

                        </button>
                    </a>
                    <a href="/delete">
                        <button class=" text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>

                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
