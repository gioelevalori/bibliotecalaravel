<?php

namespace App\Http\Controllers;
use App\Models\Prestiti;
use App\Models\Utenti;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPrestitoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $prestiti = Prestiti::all();
        $utenti = DB::table('users')->get();
        $libri = DB::table('libri')->get();
        return view('admin/prestiti.index',compact('prestiti', 'utenti', 'libri'));
    }


    public function create()
    {

        $prestiti = Prestiti::all();
        $utenti = DB::table('users')->get();
        $libri = DB::table('libri')->get();
        return view('admin/prestiti.create',compact('prestiti', 'utenti', 'libri'));
    }


    public function store(Request $request)
    {


        $validated = $request->validate([
            'utente_id' => 'required||max:255',
            'libro_id' => 'required||max:255',
            'data_prestito' => 'required',   
            'data_riconsegna' => 'required', 
        ]);
        

        $prestito = new Prestiti;
        $prestito->utente_id = $request->utente_id;
        $prestito->libro_id = $request->libro_id;
        $prestito->data_prestito = $request->data_prestito;
        $prestito->data_riconsegna = $request->data_riconsegna;
      
        $prestito->save();

        return redirect('admin/prestiti');
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
        $prestiti = Prestiti::find($id);
        return view('admin/prestiti.edit',compact('prestiti'));
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

        $prestito = Prestiti::find($id);
        $prestito->utente_id = $request->utente_id;
        $prestito->libro_id = $request->libro_id;
        $prestito->data_prestito = $request->data_prestito;
        $prestito->data_riconsegna = $request->data_riconsegna;

      
        $prestito->save();

        return redirect('admin/prestiti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestito = Prestiti::find($id);
        $prestito->delete();
        return redirect('admin/prestiti');

    }

}