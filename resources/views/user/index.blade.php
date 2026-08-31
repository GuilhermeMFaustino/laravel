@extends('layouts.default')


@section('content')
    @each('user.heading', $user, 'user')
@endsection

@section('yield')
    conteudo do yield
@endsection
    {{-- @include('user.heading', ['title' => 'Usuarios']) --}}
