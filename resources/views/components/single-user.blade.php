@props(["user","editable"=> false, "deletable"=> false])
<div class=''>
    <div class=''>
        {{ $user->name }}
    </div>
    <div class=''>
        {{ $user->email }} - {{ $user->email_verified_at ?? "Unverified" }}
    </div>
    <div class=''>
        Created at : {{ $user->created_at }}
    </div>
    <div class=''>
        Last update : {{ $user->updated_at }}
    </div>
</div>