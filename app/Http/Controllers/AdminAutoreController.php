<?php

namespace App\Http\Controllers;
use App\Models\Autori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminAutoreController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $autori = Autori::all();
        return view('admin/autori.index',compact('autori'));
    }


    public function create()
    {
        return view('admin/autori.create');
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

        return redirect('admin/autori');
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
        return view('admin/autori.edit',compact('autori'));
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

        return redirect('admin/autori');
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
        return redirect('admin/autori');

    }

}