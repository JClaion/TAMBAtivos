@extends('template.main')

@section ('title', 'Lista de usuários')

@section('content')
    @include('components.navbar')
    <div class="sidebar d-flex">
        @include('components.sidebar')
        <h2>@include('components.alert')</h2>

        <div class="table_div mx-auto">
            <table class="table table-striped" style = "margin-right: 30 px">
            <thead>
                <tr>
                    <th scope="col">Nome:</th>
                    <th>E-mail:</th>
                    <th>Cargo:</th>
                    <th >Ação:</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($users as $user)
                
                    <tr>
                
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                
                        <td>
                            <a href="{{route('admin.teste_lista.edit', $user->id)}}">Edit</a>
                        </td>
                
                    </tr>
                
                    @endforeach
                </tbody>
            </table>
            
            {{ $users->links() }}
        </div>
    </div>
    
@endsection