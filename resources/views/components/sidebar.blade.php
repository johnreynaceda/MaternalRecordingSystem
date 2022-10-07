<div>
  <div class="fixed top-0 bg-opacity-100 right-0 w-[20rem] bg-gray-100 p-4 bottom-0">
    <div class="bg-white relative rounded-xl p-4">
      <header class="flex items-center justify-between">
        <h1 class="font-semibold text-gray-600 text-lg">PROFILE</h1>
        <button class="bg-main hover:bg-red-500 h-8 grid place-content-center rounded-xl w-8">
          <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1" viewBox="0 0 36 36" preserveAspectRatio="xMidYMid meet" fill="currentColor">
            <title>settings-solid-badged</title>
            <path class="clr-i-solid--badged clr-i-solid-path-1--badged"
              d="M32.57,15.72l-3.35-1a12.12,12.12,0,0,0-.47-1.32,7.49,7.49,0,0,1-6.14-6.16,11.82,11.82,0,0,0-1.33-.48l-1-3.31A.61.61,0,0,0,19.69,3H16.31a.61.61,0,0,0-.58.43l-1,3.3a11.63,11.63,0,0,0-2.38,1l-3-1.62a.61.61,0,0,0-.72.11L6.2,8.59a.61.61,0,0,0-.11.72l1.62,3a11.63,11.63,0,0,0-1,2.37l-3.31,1a.61.61,0,0,0-.43.58v3.38a.61.61,0,0,0,.43.58l3.33,1a11.62,11.62,0,0,0,1,2.33L6.09,26.69a.61.61,0,0,0,.11.72L8.59,29.8a.61.61,0,0,0,.72.11l3.09-1.65a11.65,11.65,0,0,0,2.3.94l1,3.37a.61.61,0,0,0,.58.43h3.38a.61.61,0,0,0,.58-.43l1-3.38a11.63,11.63,0,0,0,2.28-.94l3.11,1.66a.61.61,0,0,0,.72-.11l2.39-2.39a.61.61,0,0,0,.11-.72l-1.66-3.1a11.63,11.63,0,0,0,.95-2.29l3.37-1a.61.61,0,0,0,.43-.58V16.31A.61.61,0,0,0,32.57,15.72ZM18,23.5A5.5,5.5,0,1,1,23.5,18,5.5,5.5,0,0,1,18,23.5Z">
            </path>
            <circle class="clr-i-solid--badged clr-i-solid-path-2--badged clr-i-badge" cx="30" cy="6"
              r="5"></circle>
            <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
          </svg>
        </button>
      </header>
      <div class="flex flex-1 flex-col py-4 relative z-10 justify-center items-center">
        <img class="mx-auto h-24 w-24 border-4 border-main flex-shrink-0 rounded-full"
          src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
          alt="">
        <h3 class="mt-4 text-sm font-semibold uppercase text-gray-800">{{ auth()->user()->name }}</h3>
        <dl class="mt-1 flex flex-grow flex-col justify-between">
          <dt class="sr-only">Title</dt>
          <dd class="text-sm text-gray-500 flex items-center">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
              viewBox="0 0 24 24" fill="currentColor">
              <g>
                <rect fill="none" height="24" width="24"></rect>
              </g>
              <g>
                <g>
                  <path
                    d="M17,11c0.34,0,0.67,0.04,1,0.09V6.27L10.5,3L3,6.27v4.91c0,4.54,3.2,8.79,7.5,9.82c0.55-0.13,1.08-0.32,1.6-0.55 C11.41,19.47,11,18.28,11,17C11,13.69,13.69,11,17,11z">
                  </path>
                  <path
                    d="M17,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C21,14.79,19.21,13,17,13z M17,14.38c0.62,0,1.12,0.51,1.12,1.12 s-0.51,1.12-1.12,1.12s-1.12-0.51-1.12-1.12S16.38,14.38,17,14.38z M17,19.75c-0.93,0-1.74-0.46-2.24-1.17 c0.05-0.72,1.51-1.08,2.24-1.08s2.19,0.36,2.24,1.08C18.74,19.29,17.93,19.75,17,19.75z">
                  </path>
                </g>
              </g>
            </svg>
            <span>{{ auth()->user()->role->name }}</span>
          </dd>
          <dt class="sr-only">Role</dt>
        </dl>
      </div>
      <div>
      </div>
      <div class="absolute -right-10 text-gray-100 opacity-40 -bottom-10">
        <svg class="h-56" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"
          fill="currentColor">
          <g>
            <rect fill="none" height="24" width="24"></rect>
          </g>
          <g>
            <g>
              <path
                d="M17,11c0.34,0,0.67,0.04,1,0.09V6.27L10.5,3L3,6.27v4.91c0,4.54,3.2,8.79,7.5,9.82c0.55-0.13,1.08-0.32,1.6-0.55 C11.41,19.47,11,18.28,11,17C11,13.69,13.69,11,17,11z">
              </path>
              <path
                d="M17,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C21,14.79,19.21,13,17,13z M17,14.38c0.62,0,1.12,0.51,1.12,1.12 s-0.51,1.12-1.12,1.12s-1.12-0.51-1.12-1.12S16.38,14.38,17,14.38z M17,19.75c-0.93,0-1.74-0.46-2.24-1.17 c0.05-0.72,1.51-1.08,2.24-1.08s2.19,0.36,2.24,1.08C18.74,19.29,17.93,19.75,17,19.75z">
              </path>
            </g>
          </g>
        </svg>
      </div>
    </div>
    {{ $slot }}
  </div>
</div>
