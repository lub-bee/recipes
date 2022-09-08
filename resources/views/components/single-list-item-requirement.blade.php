@props([ "requirement","deletable"=>false])
<div class='flex-1 flex gap-4'>
    <div class="text-coral-500 font-bold">-</div>
    <div class="flex-1">{{ $requirement->quantity }}{{ $requirement->unite->abbr }} {{ ucfirst($requirement->ingredient->name) }}</div>
    @if($deletable)
        <x-delete-btn-requirement :requirement="$requirement"/>
    @endif
</div>