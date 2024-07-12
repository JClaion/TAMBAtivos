<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();
        return view('admin.user.teste_lista', [
            'users' => DB::table('users')->paginate(15)
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // User::create($request->all());
        // return redirect()->route('teste_lista.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        if(!$user = User::find($id)){

            return redirect()->route('teste_lista.index')->with('error-user-not-found', 'Usuário não encontrado');
        }

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!$user = User::find($id)){

            return back()->with('error-user-not-found', 'Usuário não encontrado');
        }

        $user->update($request->only([

            'name',
            'email',
            'password'

        ]));

        return redirect()->route('teste_lista.index')->with('success', 'Usuário editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$user = User::find($id)){

            return redirect()->route('teste_lista.index')->with('error-user-not-found', 'Usuário não encontrado');
        }

        $user->delete();
        

        return redirect()->route('teste_lista.index')->with('delete-success', 'Usuário excluído com sucesso!');
        
    }
}
