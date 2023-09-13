<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
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
            'hnom' => 'required',
        ]);

        $hotel = new Hotel([
            "hnom" => $request->get('hnom'),
            "etoile" => $request->get('etoile'),
            "site" => $request->get('site'),
            "email" => $request->get('email'),
            "tel" => $request->get('tel'),
        ]);
        $hotel->save();
        return redirect('/hotels')->with('success', 'Le hotel a été enregistré!');
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
        $hotel = Hotel::find($id);
        return view('hotels.edit', compact('hotel'));
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

        $hotel = Hotel::find($id);
        $hotel->hnom = $request->get('hnom');
        $hotel->etoile = $request->get('etoile');
        $hotel->site = $request->get('site');
        $hotel->email = $request->get('email');
        $hotel->tel = $request->get('tel');
        $hotel->save();
        return redirect('/hotels')->with('success', 'Le hotel a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect('/hotels')->with('success', 'Le hotel a été supprimé!');
    }
}
