@props([
    'title' => '',
])
<div class="relative">
  <div class="flex justify-between">
    <div class="text">
      <h1 class="text-lg font-bold uppercase text-gray-700">{{ $title }}</h1>
    </div>
    <nav class="flex" aria-label="Breadcrumb">
      <ol role="list" class="flex items-center space-x-1">
        <li>
          <div>
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <!-- Heroicon name: mini/home -->
              <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Home</span>
            </a>
          </div>
        </li>

        <li>
          <div class="flex items-center">
            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20" aria-hidden="true">
              <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
            </svg>
            <a href="#" class=" text-sm font-medium text-gray-400 hover:text-gray-700"
              aria-current="page">{{ $title }}</a>
          </div>
        </li>
      </ol>
    </nav>
  </div>
</div>
