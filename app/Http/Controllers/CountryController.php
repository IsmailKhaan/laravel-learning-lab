<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
class CountryController extends Controller
{
    public function index()
    {
        return Country::all();
    }

    public function store(StoreCountryRequest $request)
    {
        return Country::create($request->validated());
    }

    public function destroy($id)
    {
        Country::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
