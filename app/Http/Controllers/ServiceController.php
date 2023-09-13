<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
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
            'description' => 'required',
        ]);

        $service = new Service([
            "description" => $request->get('description'),
            "qte" => $request->get('qte'),
            "prix_achat" => $request->get('prix_achat'),
            "prix_vente" => $request->get('prix_vente'),

        ]);
        $service->save();
        return redirect('/services')->with('success', 'Le service a été enregistré!');
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
        $service = Service::find($id);
        return view('services.edit', compact('service'));
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
        $service = Service::find($id);
        $service->description = $request->get('description');
        $service->qte = $request->get('qte');
        $service->prix_achat = $request->get('prix_achat');
        $service->prix_vente = $request->get('prix_vente');
        $service->save();
        return redirect('/services')->with('success', 'Le service a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/services')->with('success', 'Le service a été supprimé!');
    }
}
