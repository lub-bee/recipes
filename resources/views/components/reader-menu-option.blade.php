@props([
    "icon" =>"fa-solid fa-circle",
    "label" =>"",
    "url" =>"",
])
<a href="{{ $url }}" class="flex gap-4 p-2 px-4 items-center border-y border-white hover:bg-sky-100 transition group">
    <i class='{{ $icon }} '></i>
    <span class="flex-1 border-y border-white group-hover:border-sky-600 transition">{{ $label }}</span>
</a>