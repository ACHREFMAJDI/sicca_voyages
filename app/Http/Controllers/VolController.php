<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use Illuminate\Http\Request;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vol::all();
        return view('vols.index', compact('vols'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'n_vol' => 'required',
        ]);

        $vol = new Vol([
            "n_vol" => $request->get('n_vol'),
            "date_achat" => $request->get('date_achat'),
            "date_depart" => $request->get('date_depart'),
            "date_arrivée" => $request->get('date_arrivée'),
            "h_arrivage" => $request->get('h_arrivage'),
            "h_depart" => $request->get('h_depart'),
            "type" => $request->get('type'),
            "n_place" => $request->get('n_place'),
            "prix_achat" => $request->get('prix_achat'),
            "prix_vente" => $request->get('prix_vente'),

        ]);
        $vol->save();
        return redirect('/vols')->with('success', 'Le vol a été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol = Vol::find($id);
        return view('vols.edit', compact('vol'));
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
        $request->validate([
            'n_vol' => 'required',
        ]);
        $vol = Vol::find($id);
        $vol->n_vol = $request->get('n_vol');
        $vol->date_achat = $request->get('date_achat');
        $vol->date_depart = $request->get('date_depart');
        $vol->date_arrivée = $request->get('date_arrivée');
        $vol->h_arrivage = $request->get('h_arrivage');
        $vol->h_depart = $request->get('h_depart');
        $vol->type = $request->get('type');
        $vol->n_place = $request->get('n_place');
        $vol->prix_achat = $request->get('prix_achat');
        $vol->prix_vente = $request->get('prix_vente');
        $vol->save();
        return redirect('/vols')->with('success', 'Le vol a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol = Vol::find($id);
        $vol->delete();
        return redirect('/vols')->with('success', 'Le vol a été supprimé!');
    }
}