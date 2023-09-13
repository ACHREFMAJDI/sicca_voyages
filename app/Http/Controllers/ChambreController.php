<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Hotel;
use Illuminate\Http\Request;

class chambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambres = Chambre::join('hotels', 'hotels.id', '=', 'chambres.hotel_id')
            ->get([
                "chambres.id",
                "chambres.n_place",
                "chambres.num",
                "chambres.date_debut",
                "chambres.date_fin",
                "chambres.prix_achat",
                "chambres.prix_vente",
                "chambres.num_etage",
                'hotels.hnom AS hotel_nom',
            ]);
        return view('chambres.index', compact('chambres'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('chambres.create', compact('hotels'));
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

            "n_place" => 'required',
            "num" => 'required',
            "date_debut" => 'required',
            "date_fin" => 'required',
            "prix_achat" => 'required',
            "prix_vente" => 'required',
            "num_etage" => 'required',
        ]);

        $chambre = new Chambre([
            "hotel_id" => $request->get('getHotel'),
            "n_place" => $request->get('n_place'),
            "num" => $request->get('num'),
            "date_debut" => $request->get('date_debut'),
            "date_fin" => $request->get('date_fin'),
            "num_etage" => $request->get('num_etage'),
            "prix_achat" => $request->get('prix_achat'),
            "prix_vente" => $request->get('prix_vente'),

        ]);
        $chambre->save();
        return redirect('chambres')->with('success', 'Le chambre a été enregistré!');
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
        $hotels = Hotel::all();
        $chambre = Chambre::find($id);
        return view('chambres.edit', compact('chambre', 'hotels'));
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

        $chambre = Chambre::find($id);
        $chambre->hotel_id = $request->get('getHotel');
        $chambre->n_place = $request->get('n_place');
        $chambre->num = $request->get('num');
        $chambre->date_debut = $request->get('date_debut');
        $chambre->date_fin = $request->get('date_fin');
        $chambre->num_etage = $request->get('num_etage');
        $chambre->prix_achat = $request->get('prix_achat');
        $chambre->prix_vente = $request->get('prix_vente');
        $chambre->save();
        return redirect('chambres')->with('success', 'Le chambre a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chambre = Chambre::find($id);
        $chambre->delete();
        return redirect('chambres')->with('success', 'Le chambre a été supprimé!');
    }
}
