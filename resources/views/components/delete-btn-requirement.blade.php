@props(["requirement"])
<form action="{{ route("receipe.destroy_requirement") }}" method="post">
    @csrf 
    @method("delete")
    <input type="hidden" name="requirement_id" value="{{ $requirement->id }}">
    <input type="hidden" name="receipe_id" value="{{ $requirement->receipe_id }}">
    <button type="submit">Supprimer</button>
</form>