<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::orderBy('price', 'asc')
            ->with('country')
            ->take(4)
            ->get();

        $allTrips = Trip::all();

        return view('index', compact('trips', 'allTrips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip = Trip::findOrFail($id);

        return view('trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $countries = Country::all();

        return view('trips.edit', compact('trip', 'countries'));
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
            'id_country'    => 'required',
            'name'          => 'required|max:255',
            'continent'     => 'required|max:255',
            'description'   => 'required',
            'period'        => 'required|numeric',
            'price'         => 'required|numeric',
        ]);
        $country = Trip::findOrFail($id);
        $country->update($request->all());

        return redirect()->route('trips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
