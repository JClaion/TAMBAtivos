@extends('admin.index')

@section ('title', 'Lista de usuários')

@section('content')

    @include('components.navbar')
    @include('components.sidebar')

    <h1>Editar usuário {{$user->name}}</h1>


    <form action="{{route('admin.teste_lista.update', $user->id)}}" method="POST">

        @csrf()
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name = "name" value = "{{$user->name}}"><br>
        <label>E-mail:</label>
        <input type="text" name = "password" value = "{{$user->email}}"><br>
        <label>Senha:</label>
        <input type="text" name = "password"><br>

        <input type="submit" name = "edit_submit">
    </form>

    <form action="{{route('admin.teste_lista.destroy', $user->id)}}" method = "POST">

        @csrf()

        @method('delete')

        <input type="submit" value = "Excluir usuário">

    </form>


@endsection