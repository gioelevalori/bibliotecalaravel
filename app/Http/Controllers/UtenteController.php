<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UtenteController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $utenti = User::all();
        return view('utenti.index',compact('utenti'));
    }


    public function create()
    {
        return view('utenti.create');
    }


    public function store(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required||max:255',
            'cognome' => 'required',
            'email' => 'required', 
            'telefono' => 'required', 
        ]);
        

        $utente = new User;
        $utente->name = $request->name;
        $utente->cognome = $request->cognome;
        $utente->email = $request->email;
        $utente->telefono = $request->telefono;
      
        $utente->save();

        return redirect('/utenti');
    }

    public function show($id)
    {
        ; 
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utenti = User::find($id);
        return view('utenti.edit',compact('utenti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $utente = User::find($id); 
        $utente->name = $request->name;
        $utente->cognome = $request->cognome;
        $utente->email = $request->email;
        $utente->telefono = $request->telefono;
      
        $utente->save();

        return redirect('/utenti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utente = User::find($id);
        $utente->delete();
        return redirect('/utenti');

    }

}