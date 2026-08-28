<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    usuarios
    {{ count($user) }}

    @foreach ($user as $users )
    {{ dd($loop) }}
    {{ $users->id }}
    @endforeach

   {{-- @if (count($users) === 1)
        Eu tenho 1 usuario
    @elseif (count($users) > 1)
        Eu tenho varios users
    @else
        eu nao tenho usuarios
    @endif --}}
</body>

</html>
