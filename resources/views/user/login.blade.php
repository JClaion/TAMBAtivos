@extends('admin.layouts.app')

@section('title', 'Tela de login')

@section('content')


    <form action="dsadas">
        <!-- Adicionar uma rota no action -->
        
        <label>E-mail</label>
        <input type="text" name = "email_field">

        <label>Senha:</label>
        <input type="text" name = "password_field">
        <input type="submit" name = "login_button">

    </form>


@endsection