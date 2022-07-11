<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/logo.png" />
        <script src="//unpkg.com/alpinejs" defer></script>
        
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>WHEELS & DEALS | Find your best car</title>
    </head>
    <body>
        <nav class="flex justify-between items-center opacity-90 text-white" id="nav">
            <a href="/" id="navbar">
                <img class="w-23" src="{{asset('images/logo-white.png')}}" alt="" class="logo"/>
            </a> 

            
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel text-white">Manage Posts</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit"> <i class="fa-solid fa-door-closed"></i>Logout</button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-laravel text-white"
                        ><i class="fa-solid fa-user-plus text-white"></i> Register</a
                    >
                </li>

                <li>
                    <a href="/login" class="hover:text-laravel text-white"
                        ><i class="fa-solid fa-arrow-right-to-bracket text-white"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
        <main class="mx-14">
        {{$slot}}
        </main >

        <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="/" class="hover:underline">Wheels & Deals™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="/listings/create" class="mr-4 hover:underline md:mr-6 ">Post a Car</a>
                </li>
            </ul>
        </footer>
        <x-flash-message />
    </body>
</html>