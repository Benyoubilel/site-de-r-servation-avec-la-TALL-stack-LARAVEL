<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes réservations</title>
    <meta name="author" content="bestmomo">
    <meta name="description" content="Les meilleures réservations du web">
    <meta name="keywords" content="vacances,gites">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="{{ route('home') }}">
                    <span class="text-xl pl-2">Mes Vacances</span>
                </a>
            </div>
        </div>

    </nav>

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="{{ route('rents') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 @if(Route::currentRouteName() == 'rents') border-pink-500 @else border-gray-800 @endif hover:border-pink-500">
                            <i class="fas fa-bed pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Réservations</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('payments') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 @if(Route::currentRouteName() == 'payments') border-purple-500 @else border-gray-800 @endif hover:border-purple-500">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Paiements</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <form action="{{ route('logout') }}" method="POST" hidden>
                            @csrf                                
                        </form>
                        <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-500" onclick="event.preventDefault(); this.previousElementSibling.submit();">
                            <i class="fa fa-sign-out-alt pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                {{-- le contenu va venir ici --}}
                <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                        <h3 class="font-bold pl-2">
                            @if(Route::currentRouteName() == 'rents') 
                                Mes réservations 
                            @else 
                                Mes paiements 
                            @endif                        
                        </h3>
                    </div>
                </div>
    
                <div class="m-5">
                    @if(Route::currentRouteName() == 'rents') 
                        <livewire:events-table />
                    @else 
                        <livewire:payments-table />
                    @endif
                </div>
        </div>

    </div>
    @livewire('livewire-ui-modal')
    @livewireUIScripts
    @livewireScripts 
</body>

</html>