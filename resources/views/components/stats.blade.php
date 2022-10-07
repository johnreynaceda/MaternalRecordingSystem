@props([
    'title' => '',
    'bgcolor' => '',
    'color' => '',
    'icon' => '',
    'count' => '',
])
<div>
  <div class="bg-white shadow overflow-hidden relative p-4 rounded-xl">
    <div class="flex space-x-4 items-center">
      <div class="{{ $bgcolor }} h-12 w-12 rounded-2xl grid place-content-center">
        {{ $icon }}
      </div>
      <p class="text-3xl font-pop {{ $color }} font-bold">{{ $count }}</p>
    </div>
    <div class="mt-2">
      <h1 class="font-semibold text-lg text-gray-600">{{ $title }}</h1>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
      class="h-32 absolute -right-10 -top-2 opacity-10 fill-gray-400">
      {{ $slot }}
    </svg>
  </div>
</div>
