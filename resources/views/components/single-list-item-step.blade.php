@props(["step", "deletable"=>false, "editable"=>false])

<div class='flex gap-1'>

    <span class="text-sky-400">{{ $step->order }}.</span>
    <span>{{ $step->description }}</span>

    @if($deletable)
        {{-- @dd($deletable) --}}
        <x-delete-btn-step :step="$step"/>
    @endif

</div>