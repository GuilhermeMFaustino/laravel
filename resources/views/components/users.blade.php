<div>
    @foreach ($users as $user)

    {{ $user->id }} {{ $user->name }} ({{ $user->email }}) <br>
    @endforeach
    //Usuario {{ $users }}
</div>
