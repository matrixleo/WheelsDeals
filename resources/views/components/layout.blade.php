<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/smalllogo.png" />
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
        <nav class="flex justify-between items-center opacity-90 " id="nav">
            <a href="/" id="navbar">
                <img class="w-23" src="{{asset('images/logo-white.png')}}" alt="" class="logo"/>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="register.html" class="hover:text-laravel text-white"
                        ><i class="fa-solid fa-user-plus text-white"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel text-white"
                        ><i class="fa-solid fa-arrow-right-to-bracket text-white"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>
        <main class="mx-14">
        {{$slot}}
        </main >

        <footer
            class="bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-70 md:justify-center"
            id="footer"        
            >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        </footer>
    </body>
</html>