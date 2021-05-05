<?php

namespace App\Http\Controllers;
use App\Models\Libri;
use App\Models\Autori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LibroController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $libri = Libri::all();
        return view('libri.index',compact('libri'));
    }


    public function create()
    {
        $libri = Libri::all();
        return view('libri.create',compact('libri'));
    }


    public function store(Request $request)
    {


        $validated = $request->validate([
            'titolo' => 'required',
            'autore_id' => 'required',
            'editore_id' => 'required',
            'luogo_edizione' => 'required',
            'condizione_libro' => 'required',
            'codice' => 'required',
            'isbn' => 'required',
            'isbn13' => 'required',
            'argomento' => 'required',
            'anno_edizione' => 'required',
            'stato' => 'required'
        ]);
        

        $libro = new Libri;
        $libro->titolo = $request->titolo;
        $libro->autore_id = Auth::autori()->id;
        $libro->editore_id = Auth::editori()->id;
        $libro->luogo_edizione = $request->luogo_edizione;
        $libro->condizione_libro = $request->condizione_libro;
        $libro->codice = $request->codice;
        $libro->isbn = $request->isbn;
        $libro->isbn13 = $request->isbn13;
        $libro->argomento = $request->argomento;
        $libro->anno_edizione = $request->anno_edizione;
        $libro->stato = $request->stato;
      
        $libro->save();

        return redirect('/libri');
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
        $libri = Libri::find($id);
        return view('libri.edit',compact('libri'));
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
        $libro = Libri::find($id); 
        $libro->titolo = $request->titolo;
        $libro->autore_id = $request->autore_id;
        $libro->editore_id = $request->editore_id;
        $libro->luogo_edizione = $request->luogo_edizione;
        $libro->condizione_libro = $request->condizione_libro;
        $libro->codice = $request->codice;
        $libro->isbn = $request->isbn;
        $libro->isbn13 = $request->isbn13;
        $libro->argomento = $request->argomento;
        $libro->anno_edizione = $request->anno_edizione;
        $libro->stato = $request->stato;
      
        $libro->save();

        return redirect('/libri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libri::find($id);
        $libro->delete();
        return redirect('/libri');

    }

}