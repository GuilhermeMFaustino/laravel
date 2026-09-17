@extends('layouts.default')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
@endpush

@section('title', 'Lista de usuario')

@section('content')
    <x-form.button
        name="Salvar"
        variant="success"
    >

    </x-form.button>
    {{-- <x-users></x-users> --}}
    {{-- @each('user.heading', $users, 'users') --}}
@endsection
