@extends('layouts.default')



@section('title', 'Lista de usuario')

@section('content')
    @each('user.user', $users, 'user')
@endsection
