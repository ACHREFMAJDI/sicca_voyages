<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::join('users', 'users.id', '=', 'clients.user_id')
            ->get([
                "clients.id",
                "clients.nom",
                "clients.prenom",
                "clients.cin",
                "clients.passeport",
                "clients.email",
                "clients.tel",
                'clients.nom AS user_name',
            ]);
        return view('clients.index', compact('clients'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
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
            'nom' => 'required',
            'prenom' => 'required',

        ]);

        $client = new Client([
            "nom" => $request->get('nom'),
            "prenom" => $request->get('prenom'),
            "cin" => $request->get('cin'),
            "passeport" => $request->get('passeport'),
            "email" => $request->get('email'),
            "tel" => $request->get('tel'),
            "user_id" => Auth::user()->id
        ]);
        $client->save();
        return redirect('/clients')->with('success', 'Le client a été enregistré!');
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
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
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
        $client = Client::find($id);
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->cin = $request->get('cin');
        $client->passeport = $request->get('passeport');
        $client->email = $request->get('email');
        $client->tel = $request->get('tel');
        $client->user_id = Auth::user()->id;
        $client->save();
        return redirect('/clients')->with('success', 'Le client a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('success', 'Le client a été supprimé!');
    }
}
