@extends('template.main')

@section ('title', 'Cadastrar ativo')

@section('content')

    @include('components.navbar')
    <div class="sidebar d-flex">
        @include('components.sidebar')
        <div class="form_div mx-auto w-50">
            <h1>Cadastrar ativo</h1>
    
            <form action="{{route('admin.ativos.store')}}" method="POST">
        
                <!-- <th>Nome:</th>
                <th>Tipo:</th>
                <th>Número serial:</th>
                <th >Descritivo:</th>
                <th >Validade:</th>
                <th >Condição:</th> -->        
                @csrf()
        
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" name = "name_asset" value = "{{old('name_asset')}}" ><br>

                    @if ($errors->has('name_asset'))
                        <span class="error" style="color: red;">{{ $errors->first('name_asset') }}</span><br>
                    @endif              
                      
                <label class="form-label">Tipo:</label>
                <input type="text" class="form-control" name = "type" value = "{{old('type')}}" ><br>
                
                @if ($errors->has('type'))
                        <span class="error" style="color: red;">{{ $errors->first('type') }}</span><br>
                @endif   
                

                <label class="form-label">Número serial:</label>
                <input type="text" class="form-control" name = "serial_number" value = "{{old('serial_number')}}"><br>

                @if ($errors->has('serial_number'))
                    <span class="error" style="color: red;">{{ $errors->first('serial_number') }}</span><br>
                @endif

                <label class="form-label">Descrição:</label>
                <!-- Definir tamanho dessa entrada -->
                <textarea class="form-control" row="3" name = "description" value = "{{old('description')}}">
                </textarea><br>
                @if ($errors->has('description'))
                    <span class="error" style="color: red;">{{ $errors->first('description') }}</span><br>
                @endif

                <label  class="form-label" >Validade:</label>
                <input type="date" class="form-control" name = "validity" value = "{{old('validity')}}"><br>
                @if ($errors->has('validity'))
                    <span class="error" style="color: red;">{{ $errors->first('validity') }}</span><br>
                @endif
                <!-- Usar radio??? -->
                <label class="form-label">Condição:</label>
                <input type="text" class="form-control" name = "condition" value = "{{old('condition')}}"><br>

                @if ($errors->has('condition'))
                    <span class="error" style="color: red;">{{ $errors->first('condition') }}</span><br>
                @endif
        
                <label class="form-label">Item:</label>
                
                <select class="form-select" name="tb_item_id_fk">
                @foreach ($itens as $item)
                    <option selected value="{{$item->id}}" {{ old('tb_item_id_fk') == '$item->id' ? 'selected' : '' }}>{{$item->name}}</option>
                @endforeach 

                <!-- Você chupa? Ou não chupa? -->

                
                </select><br>

                @if ($errors->has('tb_item_id_fk'))
                    <span class="error" style="color: red;">{{ $errors->first('tb_item_id_fk') }}</span><br>
                @endif
        
                <label class="form-label" >Local:</label>
                <select name="tb_local_id_fk" class="form-select" >
                    @foreach ($locais as $local)
                        <option value="{{$local->id}}" {{ old('tb_local_id_fk') == '$local->id' ? 'selected' : '' }}>{{$local->room}} | {{$local->floor}} | {{$local->blockSector->block_sector}}</option>
                    @endforeach
                    
                    
                    <!-- <option selected value="1" >1</option> -->
                </select><br>
                <!-- {{ old('tb_local_id_fk') == 'valor1' ? 'selected' : '' }} -->
                @if ($errors->has('tb_local_id_fk'))
                    <span class="error" style="color: red;">{{ $errors->first('tb_local_id_fk') }}</span><br>
                @endif
        
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <button class="btn btn-danger">Cancelar</button>
        
            </form>
        </div>
    </div>    

@endsection