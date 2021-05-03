<?php

namespace App\Http\Controllers;
use App\Models\Editori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EditoreController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $editori = Editori::all();
        return view('editori.index',compact('editori'));
    }


    public function create()
    {
        return view('editori.create');
    }


    public function store(Request $request)
    {


        $validated = $request->validate([
            'nome' => 'required||max:255',
            'sito_editore' => 'required'   
        ]);
        

        $editore = new Editori;
        $editore->nome = $request->nome;
        $editore->sito_editore = $request->sito_editore;
      
        $editore->save();

        return redirect('/editori');
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
        $editori = Editori::find($id);
        return view('editori.edit',compact('editori'));
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
        $editore = Editori::find($id); 
        $editore->nome = $request->nome;
        $editore->sito_editore = $request->sito_editore;
      
        $editore->save();

        return redirect('/editori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editore = Editori::find($id);
        $editore->delete();
        return redirect('/editori');

    }

}