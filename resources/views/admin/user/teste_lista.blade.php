@extends('admin.index');

@section ('title', 'Lista de usuários')

@section('content')
    @include('components.navbar')
    @include('components.sidebar')

<table style = "margin-right: 30 px">
    <tr>
        <th>Nome:</th>
        <th>E-mail:</th>
        <th>Cargo:</th>
    </tr>

    @foreach ($users as $user)

    <tr>

        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>

    </tr>

    @endforeach
</table>

{{ $users->links() }}


@endsection