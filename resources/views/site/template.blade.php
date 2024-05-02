<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bucco Odontologia</title>

    <style>
        .whatsapp {
            width: 60px;
            height: 60px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            cursor: pointer;
            z-index: 10;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-black': '#252324',
                        'brand-gold': '#B9820D',
                        'brand-lilac': '#F8A9FF'
                    }
                },
            },
        }
    </script>
</head>

<body>
    <div class="flex flex-col h-screen">
        <header>
            <nav id="navbar" class="bg-brand-black py-2 w-full relative">
                <div class="container mx-auto py-2 flex flex-wrap items-center justify-between" style="padding: 1rem;">
                    <div class="justify-start w-44">
                        <a class="text-white no-underline hover:text-white hover:no-underline" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="" style="">
                        </a>
                    </div>

                    <div class="lg:hidden flex items-center">
                        <button class="text-white" type="button">
                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden lg:flex content-center">
                        <ul class="list-reset flex  flex-1 items-center space-x-4 2xl:space-x-10">
                            <li><a class="text-brand-gold" href="{{ route('home') }}">Home</a></li>
                            <li><a class="text-brand-gold" href="#depoimentos">Depoimentos</a></li>
                            <li><a class="text-brand-gold" href="#formulario">Formulário</a></li>
                            <li><a class="text-brand-gold" href="#duvidas">Dúvidas</a></li>
                        </ul>
                    </div>

                    <div class="transform translate-y-full transition-transform duration-200 ease-in-out hidden lg:hidden content-center flex-col w-full bg-brand-black z-50 top-full py-4"
                        id="mobile-menu">
                        <ul class="list-reset flex flex-col items-center space-y-4 2xl:space-y-10">
                            <li><a class="text-brand-gold" href="/">Home</a></li>
                            <li><a class="text-white" href="#depoimentos">Depoimentos</a></li>
                            <li><a class="text-white" href="#formulario">Formulário</a></li>
                            <li><a class="text-white" href="#duvidas">Dúvidas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="flex-grow">
            @yield('content')
        </div>

        <div>
            <a target="_blank" href="https://wa.me/553131570797">
                <img class="whatsapp" src="{{ url('images/whatsapp_green.png') }}">
            </a>
        </div>

        <footer class="bg-brand-black text-white py-8 md:px-12 lg:px-24">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-fit md:w-1/3 mb-4 md:mb-0 text-center">
                        <div class="w-32">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="mb-1">
                            (31) 3157-0797
                        </div>
                    </div>

                    <div class="w-fit md:w-1/3 mb-4 md:mb-0 text-center">
                        <div class="flex space-x-2">
                            <div class="sm:w-1/2">
                                <a href="#navbar" class="block mb-2 underline text-lg">Home</a>
                            </div>
                            <div class="sm:w-1/2">
                                <a href="#depoimentos" class="block mb-2 underline text-lg">Depoimentos</a>
                            </div>
                        </div>

                        <div class="flex space-x-2">
                            <div class="sm:w-1/2">
                                <a href="#formulario" class="block mb-2 underline text-lg">Formulário</a>
                            </div>
                            <div class="sm:w-1/2">
                                <a href="#duvidas" class="block mb-2 underline text-lg">Dúvidas</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-fit md:w-1/3 mb-0 text-end">
                        <h2 class="text-white text-lg font-bold">Redes sociais</h2>

                        <div class="flex justify-end mt-1">
                            <div class="rounded-full bg-white me-1">
                                <a href="" class="text-brand-gold" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="rounded-full bg-white me-1">
                                <a href="" class="text-brand-gold" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                            <div class="rounded-full bg-white me-1">
                                <a href="" class="text-brand-gold" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="rounded-full bg-white">
                                <a href="" class="text-brand-gold" style="padding: 0.3rem; height: 1.5rem;">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button');
            const menu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', function(event) {
                event.stopPropagation();
                menu.classList.toggle('hidden');
                menu.classList.toggle('translate-y-full');
            });

            document.addEventListener('click', function() {
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    menu.classList.add('translate-y-full');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const navbarLinks = document.querySelectorAll('a[href="#navbar"]');
            const navbarSection = document.querySelector('#navbar');

            navbarLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    navbarSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const depoimentosLinks = document.querySelectorAll('a[href="#depoimentos"]');
            const depoimentosSection = document.querySelector('#depoimentos');

            depoimentosLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    depoimentosSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const duvidasLinks = document.querySelectorAll('a[href="#duvidas"]');
            const duvidasSection = document.querySelector('#duvidas');

            duvidasLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    duvidasSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const formLinks = document.querySelectorAll('a[href="#form"]');
            const formSection = document.querySelector('#form');

            formLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    formSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
