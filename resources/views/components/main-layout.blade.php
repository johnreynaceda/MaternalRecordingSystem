<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('images/baby.png') }}" />
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Rubik&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="font-sans antialiased bg-white">
  <div class="h-full flex  w-full">
    <div class="hidden lg:flex lg:flex-shrink-0 sticky-0 top-0 fixed left-0 bottom-0 ">
      <div class="flex w-28 flex-col">
        <div class="flex min-h-0 flex-1 flex-col overflow-y-auto">
          <div class="flex-1">
            <div class="flex flex-col spaxe-x-1 items-center justify-center py-5">
              <img class="h-12 w-auto" src="{{ asset('images/baby.png') }}" alt="Your Company">
              <p class="font-bold text-main">M.R.S</p>
            </div>
            <nav aria-label="Sidebar" class="flex flex-col  items-center space-y-3 py-10">
              <a href="{{ route('admin.dashboard') }}"
                class="{{ Request::routeIs('admin.dashboard') ? 'bg-main fill-white' : 'fill-gray-400' }} flex items-center rounded-xl p-2 hover:bg-main hover:fill-white">
                <!-- Heroicon name: outline/home -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-7 w-7">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
              <a href="{{ route('admin.patients') }}"
                class="{{ Request::routeIs('admin.patients') ? 'bg-main fill-white' : 'fill-gray-400' }} flex items-center rounded-xl p-2  hover:bg-main hover:fill-white">
                <!-- Heroicon name: outline/home -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M7.39 16.539a8 8 0 1 1 9.221 0l2.083 4.76a.5.5 0 0 1-.459.701H5.765a.5.5 0 0 1-.459-.7l2.083-4.761zm.729-5.569a4.002 4.002 0 0 0 7.762 0l-1.94-.485a2 2 0 0 1-3.882 0l-1.94.485z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
              <a href="{{ route('admin.prenatal') }}"
                class="{{ Request::routeIs('admin.prenatal') ? 'bg-main fill-white' : 'fill-gray-400' }} flex items-center rounded-xl p-2  hover:bg-main hover:fill-white">
                <!-- Heroicon name: outline/home -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM6 15v2h12v-2H6zm0-8v6h6V7H6zm8 0v2h4V7h-4zm0 4v2h4v-2h-4zM8 9h2v2H8V9z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
              <a href="{{ route('admin.childs') }}"
                class="flex items-center rounded-xl p-2 {{ Request::routeIs('admin.childs') ? 'bg-main fill-white' : 'fill-gray-400' }} hover:bg-main hover:fill-white">
                <!-- Heroicon name: outline/home -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 17c3.662 0 6.865 1.575 8.607 3.925l-1.842.871C17.347 20.116 14.847 19 12 19c-2.847 0-5.347 1.116-6.765 2.796l-1.841-.872C5.136 18.574 8.338 17 12 17zm0-15a5 5 0 0 1 5 5v3a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
              <a href="#" class="flex items-center rounded-xl p-2 fill-gray-400 hover:bg-main hover:fill-white">
                <!-- Heroicon name: outline/home -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0H24V24H0z" />
                  <path
                    d="M17 5v2c1.657 0 3 1.343 3 3v11c0 .552-.448 1-1 1H5c-.552 0-1-.448-1-1V10c0-1.657 1.343-3 3-3V5h10zm-4 6h-2v2H9v2h1.999L11 17h2l-.001-2H15v-2h-2v-2zm6-9v2H5V2h14z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
              <a href="#" class="flex items-center rounded-xl p-2 fill-gray-400 hover:bg-main hover:fill-white">
                <!-- Heroicon name: outline/home -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M11 2.05V13h10.95c-.501 5.053-4.765 9-9.95 9-5.523 0-10-4.477-10-10 0-5.185 3.947-9.449 9-9.95zm2-1.507C18.553 1.02 22.979 5.447 23.457 11H13V.543z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
              <a href="{{ route('admin.users') }}"
                class="flex items-center rounded-xl p-2 {{ Request::routeIs('admin.users') ? 'bg-main fill-white' : 'fill-gray-400' }} hover:bg-main hover:fill-white">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M5 20h14v2H5v-2zm7-2a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                </svg>
                <span class="sr-only">Home</span>
              </a>
            </nav>
          </div>
          <div class="flex flex-shrink-0 pb-5">

            <div class="w-full flex-shrink-0 grid place-content-center">
              <button class="text-gray-500 hover:text-gray-700">
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  version="1.1" viewBox="0 0 36 36" preserveAspectRatio="xMidYMid meet" fill="currentColor">
                  <title>logout-solid</title>
                  <path
                    d="M23,4H7A2,2,0,0,0,5,6V30a2,2,0,0,0,2,2H23a2,2,0,0,0,2-2V24H15.63a1,1,0,0,1-1-1,1,1,0,0,1,1-1H25V6A2,2,0,0,0,23,4Z"
                    class="clr-i-solid clr-i-solid-path-1"></path>
                  <path
                    d="M28.16,17.28a1,1,0,0,0-1.41,1.41L30.13,22H25v2h5.13l-3.38,3.46a1,1,0,1,0,1.41,1.41L34,23.07Z"
                    class="clr-i-solid clr-i-solid-path-2"></path>
                  <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right rounded-l-3xl relative h-full bg-gray-100 flex-1 ml-28 p-10 mr-[20rem]">
      {{-- <img src="{{ asset('images/Animated.svg') }}" class="absolute top-0 left-0 object-cover  " alt=""> --}}
      <div class="fixed  from-transparent to-gray-500 w-full h-full overflow-hidden">
        <x-svg.background />
      </div>
      {{ $slot }}
    </div>
    @stack('modals')

    @livewireScripts
</body>

</html>
