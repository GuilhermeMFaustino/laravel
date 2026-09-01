@extends('layouts.default')



@section('title', 'Lista de usuario')

@section('content')
    <x-users></x-users>
    {{-- @each('user.heading', $users, 'users') --}}
@endsection
