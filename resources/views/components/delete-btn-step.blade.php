@props(["step"])
<form action="{{ route("receipe.destroy_step") }}" method="post">
    @csrf 
    @method("delete")
    <input type="hidden" name="step_id" value="{{ $step->id }}">
    <input type="hidden" name="receipe_id" value="{{ $step->receipe_id }}">
    <button type="submit">Supprimer</button>
</form>