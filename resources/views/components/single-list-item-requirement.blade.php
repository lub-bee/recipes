@props([ "requirement","deletable"=>false])
<div class='flex'>
    - {{ $requirement->quantity }}{{ $requirement->unite->abbr }} {{ $requirement->ingredient->name }}
    @if($deletable)
        <x-delete-btn-requirement :requirement="$requirement"/>
    @endif
</div>