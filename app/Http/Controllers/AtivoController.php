<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;

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
        return view('admin.produtos.cad_ativo');
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
        
        Ativo::create($request->all());
        return redirect()->route('admin.ativo.index');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ativo $asset)
    {
        //
    }
}
