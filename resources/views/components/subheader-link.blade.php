@props(["icon"=> "fa-solid fa-home", "label" => "Home", "url"=> route("dashboard")])

<a href="{{ $url }}" class="subheader-btn" title="{{ ucfirst($label) }}">
    <i class='{{ $icon }}'></i>
    <div class='hidden sm:block'>
        {{ ucfirst($label) }}
    </div>
</a>
{{-- Dropdown menu todo --}}