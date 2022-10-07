<x-main-layout>
  <div class="flex-1 h-full">
    <x-breadcrumbs title="Dashboard" />
    <div class="mt-16">
      <div class="bg-white rounded-xl relative p-8">
        <div class="absolute right-20 -bottom-12 ">
          <x-svg.pregnant />
        </div>
        <h1 class="text-md font-pop text-gray-400">Hello, <span class="text-green-600  uppercase">Jane
            Doe</span>
        </h1>
        <div class="mt-2 flex flex-col">
          <h1 class="font-black font-pop text-main text-2xl ">MATERNAL RECORDING SYSTEM</h1>
          <p class="text-sm text-gray-500">Barangay Biwang, Bagumbayan, Sultan Kudarat</p>
        </div>
      </div>
    </div>
    <div class="mt-10 relative">
      <div class="grid grid-cols-3 gap-4">
        <div class="bg-white shadow overflow-hidden relative p-4 rounded-xl">
          <div class="flex space-x-4 items-center">
            <div class="bg-green-500 h-12 w-12 rounded-2xl grid place-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 fill-white">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M7.39 16.539a8 8 0 1 1 9.221 0l2.083 4.76a.5.5 0 0 1-.459.701H5.765a.5.5 0 0 1-.459-.7l2.083-4.761zm.729-5.569a4.002 4.002 0 0 0 7.762 0l-1.94-.485a2 2 0 0 1-3.882 0l-1.94.485z" />
              </svg>
            </div>
            <p class="text-3xl font-pop text-green-500 font-bold">100</p>
          </div>
          <div class="mt-2">
            <h1 class="font-semibold text-lg text-gray-600">Active Patients</h1>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            class="h-32 absolute -right-10 -top-2 opacity-10 fill-gray-400">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M7.39 16.539a8 8 0 1 1 9.221 0l2.083 4.76a.5.5 0 0 1-.459.701H5.765a.5.5 0 0 1-.459-.7l2.083-4.761zm.729-5.569a4.002 4.002 0 0 0 7.762 0l-1.94-.485a2 2 0 0 1-3.882 0l-1.94.485z" />
          </svg>
        </div>
        <div class="bg-white shadow overflow-hidden relative p-4 rounded-xl">
          <div class="flex space-x-4 items-center">
            <div class="bg-main h-12 w-12 rounded-2xl grid place-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 fill-white">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 17c3.662 0 6.865 1.575 8.607 3.925l-1.842.871C17.347 20.116 14.847 19 12 19c-2.847 0-5.347 1.116-6.765 2.796l-1.841-.872C5.136 18.574 8.338 17 12 17zm0-15a5 5 0 0 1 5 5v3a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5z" />
              </svg>
            </div>
            <p class="text-3xl font-pop text-main font-bold">100</p>
          </div>
          <div class="mt-2">
            <h1 class="font-semibold text-lg text-gray-600">Childs</h1>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            class="h-32 absolute -right-10 -top-2 opacity-10 fill-gray-400">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 17c3.662 0 6.865 1.575 8.607 3.925l-1.842.871C17.347 20.116 14.847 19 12 19c-2.847 0-5.347 1.116-6.765 2.796l-1.841-.872C5.136 18.574 8.338 17 12 17zm0-15a5 5 0 0 1 5 5v3a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5z" />
          </svg>
        </div>
        <div class="bg-white shadow overflow-hidden relative p-4 rounded-xl">
          <div class="flex space-x-4 items-center">
            <div class="bg-blue-500 h-12 w-12 rounded-2xl grid place-content-center">

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 fill-white">
                <path fill="none" d="M0 0H24V24H0z" />
                <path
                  d="M17 5v2c1.657 0 3 1.343 3 3v11c0 .552-.448 1-1 1H5c-.552 0-1-.448-1-1V10c0-1.657 1.343-3 3-3V5h10zm-4 6h-2v2H9v2h1.999L11 17h2l-.001-2H15v-2h-2v-2zm6-9v2H5V2h14z" />
              </svg>
            </div>
            <p class="text-3xl font-pop text-blue-500 font-bold">100</p>
          </div>
          <div class="mt-2">
            <h1 class="font-semibold text-lg text-gray-600">Medicines</h1>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            class="h-32 absolute -right-10 -top-2 opacity-10 fill-gray-400">
            <path fill="none" d="M0 0H24V24H0z" />
            <path
              d="M17 5v2c1.657 0 3 1.343 3 3v11c0 .552-.448 1-1 1H5c-.552 0-1-.448-1-1V10c0-1.657 1.343-3 3-3V5h10zm-4 6h-2v2H9v2h1.999L11 17h2l-.001-2H15v-2h-2v-2zm6-9v2H5V2h14z" />
          </svg>
        </div>
        <div class="bg-white shadow overflow-hidden relative p-4 rounded-xl">
          <div class="flex space-x-4 items-center">
            <div class="bg-gray-500 h-12 w-12 rounded-2xl grid place-content-center">

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8 fill-white">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M5 20h14v2H5v-2zm7-2a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
              </svg>
            </div>
            <p class="text-3xl font-pop text-gray-500 font-bold">100</p>
          </div>
          <div class="mt-2">
            <h1 class="font-semibold text-lg text-gray-600">Users</h1>
          </div>

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            class="h-32 absolute -right-10 -top-2 opacity-10 fill-gray-400">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M5 20h14v2H5v-2zm7-2a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
          </svg>
        </div>

      </div>
    </div>
    <div class="mt-10 relative">
      <h1 class="font-semibold text-lg text-gray-600">LIST OF SEMINARS</h1>
      <div class="mt-2">
        <div class="overflow-hidden bg-white shadow sm:rounded-md">
          <ul role="list" class="divide-y divide-gray-200">
            <li>
              <a href="#" class="block hover:bg-gray-50">
                <div class="flex items-center px-4 py-4 sm:px-6">
                  <div class="flex min-w-0 flex-1 items-center">
                    <div class="flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-12 fill-gray-600">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zM4 9v10h16V9H4zm2 4h5v4H6v-4z" />
                      </svg>
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                      <div>
                        <p class="truncate text-lg font-semibold text-green-600">TEST
                          SEMINAR</p>
                        <p class=" flex items-center text-xs text-gray-500">
                          <!-- Heroicon name: mini/envelope -->
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-3 fill-gray-500">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                              d="M11 17.938A8.001 8.001 0 0 1 12 2a8 8 0 0 1 1 15.938V21h-2v-3.062zM5 22h14v2H5v-2z" />
                          </svg>
                          <span class="truncate">Barangay Biwang, Bagumbayan, Sultan
                            Kudarat</span>
                        </p>
                      </div>
                      <div class="hidden md:block">
                        <div>
                          <p class="text-sm text-gray-900">
                            <time datetime="2020-01-07">October 05, 2022</time>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="block hover:bg-gray-50">
                <div class="flex items-center px-4 py-4 sm:px-6">
                  <div class="flex min-w-0 flex-1 items-center">
                    <div class="flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-12 fill-gray-600">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zM4 9v10h16V9H4zm2 4h5v4H6v-4z" />
                      </svg>
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                      <div>
                        <p class="truncate text-lg font-semibold text-green-600">TEST
                          SEMINAR</p>
                        <p class=" flex items-center text-xs text-gray-500">
                          <!-- Heroicon name: mini/envelope -->
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-3 fill-gray-500">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                              d="M11 17.938A8.001 8.001 0 0 1 12 2a8 8 0 0 1 1 15.938V21h-2v-3.062zM5 22h14v2H5v-2z" />
                          </svg>
                          <span class="truncate">Barangay Biwang, Bagumbayan, Sultan
                            Kudarat</span>
                        </p>
                      </div>
                      <div class="hidden md:block">
                        <div>
                          <p class="text-sm text-gray-900">
                            <time datetime="2020-01-07">October 05, 2022</time>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</x-main-layout>
