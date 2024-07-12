@extends('admin.index')

@section ('title', 'Lista de usuários')

@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <h2>@include('components.alert')</h2>


<table style = "margin-right: 30 px">
    <tr>
        <th>Nome:</th>
        <th>E-mail:</th>
        <th>Cargo:</th>
        <th >Ação:</th>
    </tr>

    @foreach ($users as $user)

    <tr>

        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>

        <td>
            <a href="{{route('teste_lista.edit', $user->id)}}">Edit</a>
        </td>

    </tr>

    @endforeach
</table>

{{ $users->links() }}

@endsection