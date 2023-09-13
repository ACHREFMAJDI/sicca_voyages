<?php

namespace App\Http\Controllers;

use App\Models\transport;
use Illuminate\Http\Request;

class transportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transports = Transport::all();
        return view('transports.index', compact('transports'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transports.create');
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
            'num' => 'required',

        ]);

        $transport = new Transport([
            "num" => $request->get('num'),
            "type" => $request->get('type'),
            "n_place" => $request->get('n_place'),
            "heure_depart" => $request->get('heure_depart'),
            "heure_arrivage" => $request->get('heure_arrivage'),
            "date_depart" => $request->get('date_depart'),
            "date_fin" => $request->get('date_fin'),
            "prix_achat" => $request->get('prix_achat'),
            "prix_vente" => $request->get('prix_vente'),

        ]);
        $transport->save();
        return redirect('transports')->with('success', 'Le transport a été enregistré!');
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
        $transport = Transport::find($id);
        return view('transports.edit', compact('transport'));
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

        $transport = Transport::find($id);
        $transport->num = $request->get('num');
        $transport->type = $request->get('type');
        $transport->n_place = $request->get('n_place');
        $transport->heure_depart = $request->get('heure_depart');
        $transport->heure_arrivage = $request->get('heure_arrivage');
        $transport->date_depart = $request->get('date_depart');
        $transport->date_fin = $request->get('date_fin');
        $transport->prix_achat = $request->get('prix_achat');
        $transport->prix_vente = $request->get('prix_vente');
        $transport->save();
        return redirect('transports')->with('success', 'Le transport a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = Transport::find($id);
        $transport->delete();
        return redirect('transports')->with('success', 'Le transport a été supprimé!');
    }
}
