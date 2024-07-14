<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Localizacao;

class AtivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = ativo::paginate(10);
        return view('admin.produtos.ativo', ['assets' => $assets]);
    }

    public function create()
    {
        $itens = Item::all();
        $locais = Localizacao::all();
        return view('admin.produtos.cad_ativo', [
            'itens' => $itens,
            'locais' => $locais
        ]);
    }
    
    public function store(Request $request)
    {
        // $name_asset = $request->name_asset;
        // $type = $request->type;
        // $serial_number = $request->serial_number;
        // $description = $request->description;
        // $validity = $request->validity;
        // $condition = $request->condition;
        // $tb_item_id_fk = $request->tb_item_id_fk;
        // $tb_local_id_fk = $request->tb_local_id_fk;

        $validatedData = $request->validate([
            'name_asset' => 'required|string|max:255|unique:ativos,name_asset',
            'type' => 'required|string|max:10',
            'description' => 'required|string',
            'serial_number' => 'required|string|max:45|unique:ativos,serial_number',
            'validity' => 'required|date',
            'condition' => 'required|string|max:15',
            'tb_local_id_fk' => 'required|exists:localizacaos,id',
            'tb_item_id_fk' => 'required|exists:items,id',

        ], 
        [
            'name_asset.required' => 'O nome do ativo e obrigatório',
            'name_asset.max' => 'Não é possível passar de 255 caracteres.',
            'name_asset.unique' => 'Ativo já cadastrado',
            
            'type.required' => 'O nome do tipo é obrigatório',
            'type.max' => 'Não é possível passar de 10 caracteres.',

            'description.required' => 'A descrição é obrigatória',

            'validity.required' => 'A data de validade é obrigatória',

            'condition.required' => 'O campo de condição é obrigatório.',
            'condition.max' => 'Não é possível passar de 15 caracteres.',

            'tb_local_id_fk.required' => 'O local é obrigatório',
   
            'tb_item_id_fk.required' => 'O item é obrigatório',

            'serial_number.required' => 'O número serial é obrigatório',
            'serial_number.max' => 'O número serial deve ter, no máximo, 45 caracteres'

        ]);

        Ativo::create($validatedData);
        return redirect()->route('admin.ativo.index')->with('sucess', 'Ativo cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ativo $assets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ativo $asset)
    {
        if(!$asset = Ativo::find($asset)){

            return redirect()->route('admin.ativos')->with('asset-not-found', 'Ativo não encontrado');
        }

        return view('admin.produtos.ativos_edit', compact('asset'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ativo $asset)
    {
        
        if(!$asset = Ativo::find($asset)){

            return redirect()->route('admin.ativos')->with('asset-not-found', 'Ativo não encontrado');
        }

        $asset->update($request->only([

            'name_asset',
            'type',
            'serial_number',
            'description',
            'validity',
            'condition'

        ]));

        return redirect()->route('admin.ativos')->with('success', 'Ativo editado com sucesso!');
    }

    
    public function destroy(Ativo $asset)
    {
        //
    }
}
