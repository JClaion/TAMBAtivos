@extends('template.main')

@section ('title', 'Lista de ativos')

@section('content')
    @include('components.navbar')
    <div class="sidebar d-flex">
        @include('components.sidebar')
        <h2>@include('components.alert')</h2>
        <div class="table_div mx-auto w-100">
            <table class="table table-striped" style = "margin-right: 30 px">
                <tr>
                    <th>Nome:</th>
                    <th>Tipo:</th>
                    <th>Número serial:</th>
                    <th>Descrição:</th>
                    <th>Validade:</th>
                    <th>Condição:</th>
                    <th>Item Pertencente</th>
                    <th>Localização</th>
                    <th>Ações</th>

                </tr>
            
                @foreach ($assets as $asset)
            
                <tr>

                    <td>{{$asset->name_asset}}</td>
                    <td>{{$asset->type}}</td>
                    <td>{{$asset->serial_number}}</td>
                    <td>{{$asset->description}}</td>
                    <td>{{$asset->validity}}</td>
                    <td>{{$asset->condition}}</td>
                    <td>{{$asset->item->name}}</td>
                    <td>{{$asset->local->room}} | {{$asset->local->floor}} | Bloco {{$asset->local->blockSector->block_sector}}</td>

                    <td>
                        <a href="{{route('admin.ativos.edit', $asset->id)}}">Edit</a>
                    </td>
            
                </tr>
            
                @endforeach
            </table>
            {{ $assets->links() }}
        </div>
    </div>
    
@endsection