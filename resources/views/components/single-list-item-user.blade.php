@props(["user","editable"=> false, "deletable"=> false])
<a href="{{ route("user.show", $user->id) }}" class='flex'>
    <div class=''>
        {{ $user->name }}
    </div>
    <div class=''>
        {{ $user->email }} - {{ $user->email_verified_at ?? "Unverified" }}
    </div>
</a>