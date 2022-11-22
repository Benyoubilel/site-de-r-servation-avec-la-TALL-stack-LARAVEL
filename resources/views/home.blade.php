<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mes vacances</title>
    <meta name="author" content="bestmomo">
    <meta name="description" content="Les meilleures réservations du web">
    <meta name="keywords" content="vacances,gites">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
    <style>
      .fc .fc-bg-event {
          background: darkred;
      }
    </style>
  </head>
  <body class="bg-gradient-to-r from-indigo-900 to-indigo-300 leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

    <!--Hero-->
    <div class="pt-10">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <h1 class="w-full my-2 text-6xl font-bold leading-tight text-center text-white">
          Mes vacances
        </h1>
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full text-2xl">Envie de vacances ?</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
           Vous êtes au bon endroit !
          </h1>
          @auth
            <a href="{{ route('rents') }}" class="cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-110 duration-300 ease-in-out">
              Mon tableau de bord
            </a>
          @else
            <a id="auth" href="{{ route('register') }}" class="cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-110 duration-300 ease-in-out">
              Inscription ou connexion
            </a>
          @endauth
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="{{ asset('img/beach.png') }}" />
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              On a tous besoin de se détendre
            </h3>
            <p class="text-gray-600 mb-8">
              Nos gîtes sont un hâvre de paix pour que vos vacances soient une grande réussite.
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6">
            <svg class="w-5/6 sm:h-64 mx-auto" version="1.1" viewBox="0 0 428.27 582.3" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
              <g transform="translate(-6.7288 .78942)">
              <g transform="translate(-84.853 -276.78)">
              <rect x="150" y="523.08" width="315" height="315" rx="10" ry="10" fill="#e1e1e1"/>
              <g transform="matrix(-1 0 0 -1 632.86 1396.2)">
              <rect x="178.57" y="746.29" width="56.429" height="28.929" rx="7.5276" ry="7.5276" fill="#d3d7cf"/>
              <rect x="210.36" y="779.15" width="56.429" height="28.929" rx="7.5276" ry="7.5276" fill="#babdb6"/>
              <rect x="240" y="734.15" width="56.429" height="28.929" rx="7.5276" ry="7.5276" fill="#c7c9c3"/>
              </g>
              <rect x="178.57" y="746.29" width="56.429" height="28.929" rx="7.5276" ry="7.5276" fill="#d3d7cf"/>
              <rect x="210.36" y="779.15" width="56.429" height="28.929" rx="7.5276" ry="7.5276" fill="#babdb6"/>
              <rect x="240" y="734.15" width="56.429" height="28.929" rx="7.5276" ry="7.5276" fill="#c7c9c3"/>
              <rect x="173.36" y="616.51" width="125.71" height="124.64" rx="8.3341" ry="8.5097" fill="#ac6f3c"/>
              <path transform="translate(84.853 276.78)" d="m221.58 101.64c-27.892 9.359-56.86 30.518-84.285 56.82v-15.707c0-4.1703-3.359-7.5273-7.5293-7.5273h-21.73c-4.1703 0-7.5273 3.3571-7.5273 7.5273v52.088c0 0.81585 0.13315 1.5994 0.37109 2.334-31.194 36.288-58.287 75.722-76.43 106.1 60.585 30.819 316.79 16.707 392.83 0-21.474-90.212-128.68-176.11-195.7-201.63z" fill="#ac6f3c"/>
              <path d="m187.17 622.79c-4.1703 0-7.5273 3.3571-7.5273 7.5273v39.25c0 4.1703 3.3571 7.5293 7.5273 7.5293h39.252c4.1703 0 7.5273-3.359 7.5273-7.5293v-39.25c0-4.1703-3.3571-7.5273-7.5273-7.5273h-39.252zm58.98 0c-4.1703 0-7.5273 3.3571-7.5273 7.5273v39.25c0 4.1703 3.3571 7.5293 7.5273 7.5293h39.25c4.1703 0 7.5273-3.359 7.5273-7.5293v-39.25c0-4.1703-3.3571-7.5273-7.5273-7.5273h-39.25zm-58.98 58.979c-4.1703 0-7.5273 3.359-7.5273 7.5293v39.25c0 4.1703 3.3571 7.5273 7.5273 7.5273h39.252c4.1703 0 7.5273-3.3571 7.5273-7.5273v-39.25c0-4.1703-3.3571-7.5293-7.5273-7.5293h-39.252zm58.98 0c-4.1703 0-7.5273 3.359-7.5273 7.5293v39.25c0 4.1703 3.3571 7.5273 7.5273 7.5273h39.25c4.1703 0 7.5273-3.3571 7.5273-7.5273v-39.25c0-4.1703-3.3571-7.5293-7.5273-7.5293h-39.25z" fill="#bbd4f0"/>
              <path d="m350.38 670.22h76.373c4.1703 0 7.5276 3.3573 7.5276 7.5276v160.27h-91.429v-160.27c0-4.1703 3.3573-7.5276 7.5276-7.5276z" fill="#ac6f3c"/>
              <rect x="353.21" y="756.65" width="15.714" height="7.8571" rx="7.5276" ry="7.5276" fill="#8f5902"/>
              <path d="m250 337.01c-68.417-26.06-43.682 51.269-40.324 67.213 0.74364-26.01 12.731-56.957 40.324-67.213z" fill="#babdb6"/>
              <path d="m157.94 298.43c68.417-18.917 31.896 21.269 40.681 79.356-17.172-25.295-13.088-69.1-40.681-79.356z" fill="#babdb6"/>
              <path d="m187.17 622.79c-4.1703 0-7.5273 3.3571-7.5273 7.5273v39.25c0 4.1703 3.3571 7.5293 7.5273 7.5293h39.252c4.1703 0 7.5273-3.359 7.5273-7.5293v-39.25c0-4.1703-3.3571-7.5273-7.5273-7.5273h-39.252zm58.98 0c-4.1703 0-7.5273 3.3571-7.5273 7.5273v39.25c0 4.1703 3.3571 7.5293 7.5273 7.5293h23.389a126.61 126.61 0 0 0 23.246-48.236c-0.67507-3.468-3.7134-6.0703-7.3848-6.0703h-39.25zm-58.98 58.979c-4.1703 0-7.5273 3.359-7.5273 7.5293v36.213a126.61 126.61 0 0 0 54.307-17.193v-19.02c0-4.1703-3.3571-7.5293-7.5273-7.5293h-39.252zm58.98 0c-4.1703 0-7.5273 3.359-7.5273 7.5293v16.283a126.61 126.61 0 0 0 27.213-23.812h-19.686z" fill="#fff" opacity=".36"/>
              <path d="m277.14 787.86v20h2.5v-20h-2.5zm-31.25 0.71484v20h2.5v-20h-2.5zm-46.25 3.75v20h2.5v-20h-2.5zm24.465 2.5v20h2.5v-20h-2.5zm41.07 0.71485v20h2.5v-20h-2.5z" fill="#73d216"/>
              <g transform="matrix(.87368 0 0 .87368 87.139 98.905)">
              <path transform="matrix(1.4074 0 0 1.4074 -142.09 -329.74)" d="m259.05 772.54a5.8365 5.8365 0 0 0-3.4258 1.1191 5.8365 5.8365 0 0 0-3.0449-0.86524 5.8365 5.8365 0 0 0-5.8359 5.8359 5.8365 5.8365 0 0 0 0.44336 2.2207 5.8365 5.8365 0 0 0-3.6152 5.3926 5.8365 5.8365 0 0 0 5.8359 5.8359 5.8365 5.8365 0 0 0 1.1348-0.11719 5.8365 5.8365 0 0 0 5.7168 4.6856 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-0.0332-0.56836 5.8365 5.8365 0 0 0 0.79492 0.0625 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-3.8398-5.4766 5.8365 5.8365 0 0 0 0.0332-0.61328 5.8365 5.8365 0 0 0-5.8359-5.8359zm-3.0449 10.807a5.8365 5.8365 0 0 0 1.0488 0.50781 5.8365 5.8365 0 0 0-0.0332 0.61133 5.8365 5.8365 0 0 0 0.0332 0.57031 5.8365 5.8365 0 0 0-0.79492-0.0625 5.8365 5.8365 0 0 0-1.1348 0.11719 5.8365 5.8365 0 0 0-0.32422-1.0684 5.8365 5.8365 0 0 0 1.2051-0.67578z" fill="#c00"/>
              <circle cx="218.75" cy="774.68" r="5.1786" fill="#fce634"/>
              </g>
              <rect x="178.04" y="806.29" width="117.5" height="29.643" rx="6.099" ry="6.099" fill="#ac6f3c"/>
              <rect x="176.79" y="830.93" width="120" height="9.6429" rx="4.6704" ry="4.6704" fill="#8f5902"/>
              <g transform="translate(-17.857 7.5)">
              <path transform="translate(12.857 -3.75)" d="m209.64 761.29a8.2143 8.2143 0 0 0-4.8203 1.5762 8.2143 8.2143 0 0 0-4.2871-1.2188 8.2143 8.2143 0 0 0-8.2129 8.2129 8.2143 8.2143 0 0 0 0.62304 3.125 8.2143 8.2143 0 0 0-5.0879 7.5898 8.2143 8.2143 0 0 0 8.2148 8.2148 8.2143 8.2143 0 0 0 1.5976-0.16407 8.2143 8.2143 0 0 0 8.0449 6.5918 8.2143 8.2143 0 0 0 8.2129-8.2129 8.2143 8.2143 0 0 0-0.0469-0.80078 8.2143 8.2143 0 0 0 1.1191 0.0859 8.2143 8.2143 0 0 0 8.2148-8.2148 8.2143 8.2143 0 0 0-5.4043-7.709 8.2143 8.2143 0 0 0 0.0469-0.86133 8.2143 8.2143 0 0 0-8.2148-8.2148zm-4.2852 15.209a8.2143 8.2143 0 0 0 1.4746 0.71289 8.2143 8.2143 0 0 0-0.0469 0.86328 8.2143 8.2143 0 0 0 0.0469 0.80078 8.2143 8.2143 0 0 0-1.1172-0.0859 8.2143 8.2143 0 0 0-1.5996 0.16406 8.2143 8.2143 0 0 0-0.45507-1.5039 8.2143 8.2143 0 0 0 1.6973-0.95117z" fill="#ef2929"/>
              <circle cx="218.75" cy="774.68" r="5.1786" fill="#fce634"/>
              </g>
              <g transform="matrix(.80144 0 0 .80144 71.997 157.2)">
              <path transform="matrix(1.4074 0 0 1.4074 -142.09 -329.74)" d="m259.05 772.54a5.8365 5.8365 0 0 0-3.4258 1.1191 5.8365 5.8365 0 0 0-3.0449-0.86524 5.8365 5.8365 0 0 0-5.8359 5.8359 5.8365 5.8365 0 0 0 0.44336 2.2207 5.8365 5.8365 0 0 0-3.6152 5.3926 5.8365 5.8365 0 0 0 5.8359 5.8359 5.8365 5.8365 0 0 0 1.1348-0.11719 5.8365 5.8365 0 0 0 5.7168 4.6856 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-0.0332-0.56836 5.8365 5.8365 0 0 0 0.79492 0.0625 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-3.8398-5.4766 5.8365 5.8365 0 0 0 0.0332-0.61328 5.8365 5.8365 0 0 0-5.8359-5.8359zm-3.0449 10.807a5.8365 5.8365 0 0 0 1.0488 0.50781 5.8365 5.8365 0 0 0-0.0332 0.61133 5.8365 5.8365 0 0 0 0.0332 0.57031 5.8365 5.8365 0 0 0-0.79492-0.0625 5.8365 5.8365 0 0 0-1.1348 0.11719 5.8365 5.8365 0 0 0-0.32422-1.0684 5.8365 5.8365 0 0 0 1.2051-0.67578z" fill="#eb3e3e"/>
              <circle cx="218.75" cy="774.68" r="5.1786" fill="#fce634"/>
              </g>
              <g transform="matrix(.71053 0 0 .71053 70.066 238.57)">
              <path transform="matrix(1.4074 0 0 1.4074 -142.09 -329.74)" d="m259.05 772.54a5.8365 5.8365 0 0 0-3.4258 1.1191 5.8365 5.8365 0 0 0-3.0449-0.86524 5.8365 5.8365 0 0 0-5.8359 5.8359 5.8365 5.8365 0 0 0 0.44336 2.2207 5.8365 5.8365 0 0 0-3.6152 5.3926 5.8365 5.8365 0 0 0 5.8359 5.8359 5.8365 5.8365 0 0 0 1.1348-0.11719 5.8365 5.8365 0 0 0 5.7168 4.6856 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-0.0332-0.56836 5.8365 5.8365 0 0 0 0.79492 0.0625 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-3.8398-5.4766 5.8365 5.8365 0 0 0 0.0332-0.61328 5.8365 5.8365 0 0 0-5.8359-5.8359zm-3.0449 10.807a5.8365 5.8365 0 0 0 1.0488 0.50781 5.8365 5.8365 0 0 0-0.0332 0.61133 5.8365 5.8365 0 0 0 0.0332 0.57031 5.8365 5.8365 0 0 0-0.79492-0.0625 5.8365 5.8365 0 0 0-1.1348 0.11719 5.8365 5.8365 0 0 0-0.32422-1.0684 5.8365 5.8365 0 0 0 1.2051-0.67578z" fill="#c00"/>
              <circle cx="218.75" cy="774.68" r="5.1786" fill="#fce634"/>
              </g>
              <g transform="matrix(.80144 0 0 .80144 91.104 166.67)">
              <path transform="matrix(1.4074 0 0 1.4074 -142.09 -329.74)" d="m259.05 772.54a5.8365 5.8365 0 0 0-3.4258 1.1191 5.8365 5.8365 0 0 0-3.0449-0.86524 5.8365 5.8365 0 0 0-5.8359 5.8359 5.8365 5.8365 0 0 0 0.44336 2.2207 5.8365 5.8365 0 0 0-3.6152 5.3926 5.8365 5.8365 0 0 0 5.8359 5.8359 5.8365 5.8365 0 0 0 1.1348-0.11719 5.8365 5.8365 0 0 0 5.7168 4.6856 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-0.0332-0.56836 5.8365 5.8365 0 0 0 0.79492 0.0625 5.8365 5.8365 0 0 0 5.8359-5.8379 5.8365 5.8365 0 0 0-3.8398-5.4766 5.8365 5.8365 0 0 0 0.0332-0.61328 5.8365 5.8365 0 0 0-5.8359-5.8359zm-3.0449 10.807a5.8365 5.8365 0 0 0 1.0488 0.50781 5.8365 5.8365 0 0 0-0.0332 0.61133 5.8365 5.8365 0 0 0 0.0332 0.57031 5.8365 5.8365 0 0 0-0.79492-0.0625 5.8365 5.8365 0 0 0-1.1348 0.11719 5.8365 5.8365 0 0 0-0.32422-1.0684 5.8365 5.8365 0 0 0 1.2051-0.67578z" fill="#ef2929"/>
              <circle cx="218.75" cy="774.68" r="5.1786" fill="#fce634"/>
              </g>
              </g>
              </g>
              </svg>
              
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <svg class="w-5/6 sm:h-64 mx-auto" version="1.1" viewBox="0 0 38.222 38.224" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
              <defs>
                <clipPath id="j">
                  <path d="m29.809 10.61c-1.305-4-3.825-6.961-7.559-8.883-3.734-1.918-7.602-2.238-11.602-0.961-4 1.309-6.957 3.829-8.878 7.563-1.918 3.734-2.239 7.598-0.961 11.598 1.308 4 3.828 6.96 7.562 8.882 3.731 1.918 7.613 2.239 11.637 0.957 4-1.304 6.949-3.824 8.844-7.558 1.918-3.731 2.238-7.598 0.957-11.598z"/>
                </clipPath>
                <clipPath id="i">
                  <path d="m-3263.4-6355.7h54.098v54.098h-54.098v-54.098z"/>
                </clipPath>
                <radialGradient id="c" cx="-3243.6" cy="-6329.9" r="25.902" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff" stop-opacity="0" offset="0"/>
                  <stop stop-color="#fff" stop-opacity=".1922" offset=".5255"/>
                  <stop stop-color="#fff" stop-opacity=".4392" offset="1"/>
                </radialGradient>
                <mask id="e">                  
                    <g clip-path="url(#i)">
                      <path d="m-3263.4-6355.7h54.098v54.098h-54.098v-54.098z" fill="url(#c)"/>
                    </g>                  
                </mask>
                <radialGradient id="b" cx="-3243.6" cy="-6329.9" r="25.902" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#110c0e" offset="0"/>
                  <stop stop-color="#0b0809" offset=".5255"/>
                  <stop offset="1"/>
                </radialGradient>
                <clipPath id="h">
                  <path d="m29.809 10.61c-1.305-4-3.825-6.961-7.559-8.883-3.734-1.918-7.602-2.238-11.602-0.961-4 1.309-6.957 3.829-8.878 7.563-1.918 3.734-2.239 7.598-0.961 11.598 1.308 4 3.828 6.96 7.562 8.882 3.731 1.918 7.613 2.239 11.637 0.957 4-1.304 6.949-3.824 8.844-7.558 1.918-3.731 2.238-7.598 0.957-11.598z"/>
                </clipPath>
                <clipPath id="g">
                  <path d="m-3263.4-6355.7h54.098v54.098h-54.098v-54.098z"/>
                </clipPath>
                <radialGradient id="a" cx="-3243.6" cy="-6329.9" r="25.902" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff" stop-opacity=".7765" offset="0"/>
                  <stop stop-color="#fff" stop-opacity=".3176" offset=".0745"/>
                  <stop stop-color="#fff" stop-opacity=".078401" offset=".4118"/>
                  <stop stop-color="#fff" stop-opacity="0" offset="1"/>
                </radialGradient>
                <mask id="f">                  
                    <g clip-path="url(#g)">
                      <path d="m-3263.4-6355.7h54.098v54.098h-54.098v-54.098z" fill="url(#a)"/>
                    </g>                  
                </mask>
                <radialGradient id="d" cx="-3243.6" cy="-6329.9" r="25.902" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff" offset="0"/>
                  <stop stop-color="#fff" offset=".0745"/>
                  <stop stop-color="#fff" offset=".4118"/>
                  <stop stop-color="#fff" offset="1"/>
                </radialGradient>
              </defs>
              <g transform="matrix(1.25 0 0 -1.25 0 38.224)">                
                  <path d="m10.848 26.489c0.668 0.586 0.894 1.094 0.683 1.52l-0.121 0.121c4.664 1.652 9.133 1.332 13.399-0.961 0.773-0.614 1.468-1.282 2.082-2l1.64-2.403c0-0.023 0.012-0.05 0.039-0.078 0.028-0.027 0.051-0.066 0.078-0.121 0.028-0.051 0.055-0.117 0.082-0.199 0.028-0.027 0.051-0.066 0.079-0.121 1.734-3.36 2.175-6.824 1.32-10.399l-0.039-0.121c-0.028-0.078-0.055-0.172-0.082-0.277l-0.16-0.602c-0.024-0.082-0.051-0.148-0.078-0.199-0.481-1.441-1.106-2.75-1.879-3.922l-3.481-3.64c-0.215-0.133-0.426-0.266-0.64-0.399 2.187 3.922 2 8.199-0.559 12.84-1.734 3.149-3.934 5.734-6.602 7.762-1.785 1.387-3.707 2.453-5.761 3.199z" fill="#ec4774" fill-rule="evenodd"/>
                  <path d="m24.41 3.087c-0.695-0.477-1.426-0.918-2.199-1.321-0.055-0.023-0.109-0.05-0.16-0.078-2.082-0.133-4.016 0.215-5.801 1.039-2.535 1.2-4.574 3.293-6.121 6.282-1.652 3.226-2.52 6.535-2.598 9.918-0.054 2.269 0.227 4.429 0.84 6.48 0.531 0.055 1.051 0.203 1.559 0.441 0.32 0.188 0.629 0.399 0.918 0.641 2.054-0.746 3.976-1.812 5.761-3.199 2.668-2.028 4.868-4.613 6.602-7.762 2.559-4.641 2.746-8.918 0.559-12.84 0.214 0.133 0.425 0.266 0.64 0.399z" fill="#377afa" fill-rule="evenodd"/>
                  <path d="m11.09 29.927c-0.266-0.079-0.535-0.161-0.801-0.239 3.121 1.145 6.348 1.188 9.68 0.121 2.855-0.933 5.16-2.48 6.922-4.64-0.614 0.718-1.309 1.386-2.082 2-1.918 1.547-4.079 2.558-6.481 3.039-2.453 0.508-4.863 0.414-7.238-0.281zm-4.961-2.477c-1.68-1.254-3.051-2.801-4.121-4.641-1.227-2.214-1.879-4.574-1.957-7.082-0.028-1.117 0.051-2.211 0.238-3.277-0.508 2.449-0.348 4.957 0.481 7.52 1.093 3.359 3.066 5.984 5.921 7.878-0.187-0.132-0.375-0.265-0.562-0.398zm4.879-26.762c-0.133 0.028-0.266 0.067-0.399 0.121-0.398 0.133-0.785 0.278-1.16 0.438 0.348-0.133 0.707-0.266 1.082-0.399 0.16-0.054 0.317-0.105 0.477-0.16z" fill="#4880eb" fill-rule="evenodd"/>
                  <path d="m10.848 26.489c-0.293-0.242-0.598-0.453-0.918-0.641-0.508-0.238-1.028-0.386-1.559-0.441-0.59-0.051-0.976 0.082-1.16 0.402l-0.043 0.36c0 0.32 0.187 0.664 0.562 1.039 0.321 0.32 0.68 0.586 1.079 0.801l0.882 0.32c0.344 0.504 0.813 1.039 1.399 1.598 2.375 0.695 4.785 0.789 7.238 0.281 2.402-0.481 4.563-1.492 6.481-3.039-4.266 2.293-8.735 2.613-13.399 0.961l0.121-0.121c0.211-0.426-0.015-0.934-0.683-1.52z" fill="#fff" fill-rule="evenodd"/>
                  <path d="m7.73 27.208-1.601 0.242c0.187 0.133 0.375 0.266 0.562 0.398l0.52 0.36c0.348 0.242 0.719 0.453 1.117 0.64 0.563 0.293 1.137 0.547 1.723 0.762l0.238 0.078c0.266 0.078 0.535 0.16 0.801 0.239-0.586-0.559-1.055-1.094-1.399-1.598l-0.882-0.32c-0.399-0.215-0.758-0.481-1.079-0.801z" fill="#9fde51" fill-rule="evenodd"/>
                  <path d="m2.008 22.809c1.574 1.278 3.297 2.399 5.16 3.36l0.043-0.36c0.184-0.32 0.57-0.453 1.16-0.402-0.613-2.051-0.894-4.211-0.84-6.48 0.078-3.383 0.946-6.692 2.598-9.918 1.547-2.989 3.586-5.082 6.121-6.282 1.785-0.824 3.719-1.172 5.801-1.039h0.039c-0.399-0.215-0.813-0.398-1.242-0.558l-5.278-1.082-3.679 0.402c-0.266 0.051-0.52 0.117-0.762 0.199l-0.121 0.039c-0.16 0.055-0.317 0.106-0.477 0.16-0.375 0.133-0.734 0.266-1.082 0.399l-2.918 1.562c-2 1.387-3.601 3.239-4.801 5.559-0.132 0.266-0.265 0.547-0.402 0.84-0.023 0.027-0.039 0.054-0.039 0.082l-1 3.16c-0.187 1.066-0.266 2.16-0.238 3.277 0.078 2.508 0.73 4.868 1.957 7.082z" fill="#faef53" fill-rule="evenodd"/>
                  <path d="m2.008 22.809c1.066 1.84 2.441 3.387 4.121 4.641l1.601-0.242c-0.375-0.375-0.562-0.719-0.562-1.039-1.863-0.961-3.586-2.082-5.16-3.36z" fill="#e9b41f" fill-rule="evenodd"/>
                    <g clip-path="url(#j)">
                      <g transform="matrix(.64864 -.46832 -.46832 -.64864 -849.07 -5605.6)">
                        <g mask="url(#e)">
                          <path d="m29.809 10.61c-1.305-4-3.825-6.961-7.559-8.883-3.734-1.918-7.602-2.238-11.602-0.961-4 1.309-6.957 3.829-8.878 7.563-1.918 3.734-2.239 7.598-0.961 11.598 1.308 4 3.828 6.96 7.562 8.882 3.731 1.918 7.613 2.239 11.637 0.957 4-1.304 6.949-3.824 8.844-7.558 1.918-3.731 2.238-7.598 0.957-11.598z" fill="url(#b)" fill-rule="evenodd"/>
                        </g>
                      </g>
                    </g>
                    <g clip-path="url(#h)">
                      <g transform="matrix(.64864 -.46832 -.46832 -.64864 -849.07 -5605.6)">
                        <g mask="url(#f)">
                          <path d="m29.809 10.61c-1.305-4-3.825-6.961-7.559-8.883-3.734-1.918-7.602-2.238-11.602-0.961-4 1.309-6.957 3.829-8.878 7.563-1.918 3.734-2.239 7.598-0.961 11.598 1.308 4 3.828 6.96 7.562 8.882 3.731 1.918 7.613 2.239 11.637 0.957 4-1.304 6.949-3.824 8.844-7.558 1.918-3.731 2.238-7.598 0.957-11.598z" fill="url(#d)" fill-rule="evenodd"/>
                        </g>
                      </g>
                    </g>
              </g>
            </svg>
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                On a aussi besoin de s'amuser
              </h3>
              <p class="text-gray-600 mb-8">
                Dans un environnement naturel et festif vous pourrez profiter de toutes nos activités récréatives.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <!--Content-->
    <section class="container mx-auto text-center py-6 mb-12">
      <h1 class="w-full my-6 text-5xl font-bold leading-tight text-center text-white">
        N'attendez pas plus longtemps et lancez-vous !
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-6 text-3xl leading-tight">
        Juste un petit clic pour un merveilleux séjour !
      </h3>      
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 mb-9 py-0 rounded-t"></div>
      </div>

      @foreach($homes as $home)
        <h3 class="my-6 text-6xl leading-tight">
          {{ $home->title }}
        </h3> 
        <h3 class="my-6 text-3xl leading-tight">
          {{ $home->text1 }}
        </h3> 
        <h3 class="my-6 text-3xl leading-tight">
          {{ $home->text2 }}
        </h3> 
        <h3 class="my-6 text-3xl leading-tight">
          {{ $home->text3 }}
        </h3> 
        <img class="w-full p-6" src="{{ asset('img/' . $home->image) }}" alt="Gite">
        <h3 class="my-6 text-3xl leading-tight">
          N'attendez pas pour réserver !
        </h3>
        <p class="my-6 text-1xl leading-tight">Cliquez sur le premier jour de votre séjour (arrivée à partir de 16h00) puis faites glisser jusqu'au dernier jour (départ le lendemain avant 10h00)</p>
        <p class="my-6 text-1xl leading-tight">Les jours en rouge ne sont malheureusement pas disponibles</p>
        <livewire:calendar :idCalendar="$home->id" />
        <div class="w-full mb-4">
          <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-9 py-0 rounded-t"></div>
        </div>
      @endforeach
      @livewireScripts
      @stack('scripts')

      <h3 class="my-6 text-3xl leading-tight">
        Merci pour votre visite !
      </h3>
    </section>

    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
              MES VACANCES
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Données légales</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Données personnelles</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Société</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">A propos de nous</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    @livewire('livewire-ui-modal')
    @livewireUIScripts
  </body>
</html>
