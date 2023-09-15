<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Transport;
use App\Models\Vol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::join('vols', 'vols.id', '=', 'reservations.id_vol')
            ->join('chambres', 'chambres.id', '=', 'reservations.id_chambre')
            ->join('transports', 'transports.id', '=', 'reservations.id_transport')
            ->join('services', 'services.id', '=', 'reservations.id_service')
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->get([
                "reservations.id",
                "reservations.date_reservation",
                'vols.n_vol AS v_n_vol',
                'vols.n_place AS v_n_place',
                'chambres.hotel_id AS c_hotel_id',
                'chambres.num AS c_num',
                'chambres.num_etage AS c_num_etage',
                'transports.date_depart AS t_date_depart',
                'transports.num AS t_num',
                'transports.n_place AS t_n_place',
                'services.description AS s_description',
                'users.name AS user_name',
            ]);
        return view('reservations.index', compact('reservations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $services = Service::all();
        $transports = Transport::all();
        $vols = Vol::all();
        return view('reservations.create', compact('vols', 'chambres', 'services', 'transports'));
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
            'date_reservation' => 'required',
        ]);

        $reservation = new Reservation([
            "user_id" => Auth::user()->id,
            "date_reservation" => $request->get('date_reservation'),
            "id_vol" => $request->get('id_vol'),
            "id_chambre" => $request->get('id_chambre'),
            "id_transport" => $request->get('id_transport'),
            "id_service" => $request->get('id_service'),

        ]);
        $reservation->save();
        return redirect('/reservations')->with('success', 'Le reservation a été enregistré!');
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
        $services = Service::all();
        $transports = Transport::all();
        $vols = Vol::all();
        $reservation = Reservation::find($id);
        return view('reservations.edit', compact('reservation', 'chambres', 'services', 'transports', 'vols'));
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
            'date_reservation' => 'required',

        ]);
        $reservation = Reservation::find($id);
        $reservation->date_reservation = $request->get('date_reservation');
        $reservation->id_vol = $request->get('id_vol');
        $reservation->id_chambre = $request->get('id_chambre');
        $reservation->id_transport = $request->get('id_transport');
        $reservation->id_service = $request->get('id_service');
        $reservation->save();
        return redirect('/reservations')->with('success', 'Le reservation a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/reservations')->with('success', 'Le reservation a été supprimé!');
    }
}
