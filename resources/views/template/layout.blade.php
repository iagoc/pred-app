<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('titulo')</title>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>
<body class="bg-gray-50">
<nav>
    <div class="flex justify-between bg-white shadow-sm">
        <div class="flex flex-wrap flex-col self-center p-5">
            {{-- <hr class="w-36 bg-gray-900 h-0.5"> --}}
            <h1 class="text-4xl font-medium text-gray-700">Pred.App</h1>
            {{-- <hr class="w-40 bg-gray-900 h-0.5 mt-1"> --}}
        </div>
        <div class="md:hidden flex items-center pr-3">
            <button class="outline-none mobile-menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="34" height="34"
viewBox="0 0 50 50"
style=" fill:#000000;"><path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"></path></svg>
            {{-- <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                x-show="!showMenu"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 20 20"
                stroke="currentColor"
            >
                <path d="M4 6h16M4 12h16M4 18h16"></path> --}}
            {{-- </svg> --}}
            </button>
        </div>
    
    </div>
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="/" class="block text-sm px-2 py-4 text-white bg-gray-700 font-semibold">Inicio</a></li>
                <li><a href="/resident" class="block text-sm px-2 py-4 hover:bg-gray-700 hover:text-white font-medium transition duration-300">Moradores</a></li>
                <li><a href="/building" class="block text-sm px-2 py-4 hover:bg-gray-700 hover:text-white font-semibold transition duration-300">Predios</a></li>
                
                {{-- <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-gray-700 hover:text-white font-semibold transition duration-300">Contact Us</a></li> --}}
            </ul>
        </div>
    


    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
    {{-- <div class="">
        <div class="flex items-center flex-wrap">
            <a href="">Inicio</a>
            <a href="">Predios</a>
            <a href="">Moradores</a>
        </div>
    </div>     --}}
</nav>

<div class="flex justify-center pt-6">
    @yield('img-id')
</div>

<section class="max-w-4xl mx-auto my-auto">
    @yield('content')
</section>

</body>
</html>