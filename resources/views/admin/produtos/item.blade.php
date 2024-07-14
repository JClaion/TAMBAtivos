@extends('template.main')

@section ('title', 'Lista de itens')

@section('content')
    @include('components.navbar')
    <div class="sidebar d-flex">
        @include('components.sidebar')
        <h2>@include('components.alert')</h2>
        <div class="table_div">
            <table class="table" style = "margin-right: 30 px">
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
                        <a href="{{route('admin.user.edit', $user->id)}}">Edit</a>
                    </td>
            
                </tr>
            
                @endforeach
            </table>
            
            {{ $users->links() }}
        </div>
    </div>
    
@endsection