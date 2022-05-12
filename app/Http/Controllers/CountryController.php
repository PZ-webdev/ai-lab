<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use Exception;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return new CountryCollection(Country::all());
        // return new CountryCollection(Country::with('trips')->get());
        return new CountryCollection(Country::paginate(3));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        return new CountryResource(Country::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        // return new CountryResource($country);
        return new CountryResource($country->loadMissing('trips'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update($request->all());
        $country = $country->refresh();
        return new CountryResource($country);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        try {
            $country->delete();
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Nie można usunąć kraju ponieważ jest ona używana'
            ], 200);
        }
    }
}
