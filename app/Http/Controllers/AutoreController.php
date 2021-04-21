<?php

namespace App\Http\Controllers;
use App\Models\Autori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutoreController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $autori = Autori::all();
        return view('autori.index',compact('autori'));
    }


    public function create()
    {
        return view('autori.create');
    }


    public function store(Request $request)
    {


        $validated = $request->validate([
            'nome' => 'required||max:255',
            'cognome' => 'required',
      
            
        ]);
        

        $autore = new Autori;
        $autore->nome = $request->nome;
        $autore->cognome = $request->cognome;
      
        $autore->save();

        return redirect('/autori');
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
        $autori = Autori::find($id);
        return view('autori.edit',compact('autori'));
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
        $autore = Autori::find($id); 
        $autore->nome = $request->nome;
        $autore->cognome = $request->cognome;
      
        $autore->save();

        return redirect('/autori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autore = Autori::find($id);
        $autore->delete();
        return redirect('/autori');

    }

}