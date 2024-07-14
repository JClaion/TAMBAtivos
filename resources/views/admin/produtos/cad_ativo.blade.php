@extends('admin.index')

@section ('title', 'Cadastrar ativo')

@section('content')

    @include('components.navbar')
    @include('components.sidebar')

    <h1>Cadastrar ativo</h1>


    <form action="{{route('admin.ativos.store')}}" method="POST">

        <!-- <th>Nome:</th>
        <th>Tipo:</th>
        <th>Número serial:</th>
        <th >Descritivo:</th>
        <th >Validade:</th>
        <th >Condição:</th> -->

        @csrf()

        <label>Nome:</label>
        <input type="text" name = "name_asset"><br>
        <label>Tipo:</label>
        <input type="text" name = "type" ><br>
        <label>Número serial:</label>
        <input type="text" name = "serial_number" ><br>
        <label>Descrição:</label>

        <!-- Definir tamanho dessa entrada -->
        <input type="textarea" name = "description"><br>

        <label>Validade:</label>
        <input type="text" name = "validity"><br>

        <!-- Usar radio??? -->
        <label>Condição:</label>
        <input type="text" name = "condition"><br>

        <label>Item:</label>
        <select name="tb_item_id_fk">
            <option selected value="1">1</option>
        </select>

        <label>Local:</label>
        <select name="tb_local_id_fk">
            <option selected value="1">1</option>
        </select>

        <input type="submit" name = "edit_submit">

    </form>


@endsection