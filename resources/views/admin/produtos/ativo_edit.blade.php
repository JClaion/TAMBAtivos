@extends('admin.index')

@section ('title', 'Editar ativo')

@section('content')

    @include('components.navbar')
    @include('components.sidebar')

    <h1>Editar ativo {{$asset->name}}</h1>


    <form action="{{route('admin.ativo.update', $asset->id)}}" method="POST">

                    <!-- <th>Nome:</th>
                    <th>Tipo:</th>
                    <th>Número serial:</th>
                    <th >Descritivo:</th>
                    <th >Validade:</th>
                    <th >Condição:</th> -->

        @csrf()
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name = "name" value = "{{$asset->name}}"><br>
        <label>Tipo:</label>
        <input type="text" name = "type" value = "{{$asset->type}}"><br>
        <label>Número serial:</label>
        <input type="text" name = "serial_number" value = "{{$asset->serial_number}}"><br>
        <label>Descrição:</label>

        <!-- Definir tamanho dessa entrada -->
        <input type="textarea" name = "description" value = "{{$asset->description}}"><br>


        <label>Validade:</label>
        <input type="text" name = "validity" value = "{{$asset->validity}}"><br>

        <!-- Usar radio??? -->
        <label>Condição:</label>
        <input type="text" name = "condition" value = "{{$asset->condition}}"><br>

        
        <input type="submit" name = "edit_submit">
    </form>

    <form action="{{route('admin.user.destroy', $asset->id)}}" method = "POST">

        @csrf()

        @method('delete')

        <input type="submit" value = "Excluir ativo">

    </form>


@endsection