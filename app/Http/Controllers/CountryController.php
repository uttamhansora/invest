<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        try {
            $countries = Country::all();
            return view('admin.countries.index', compact('countries'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            Country::create($request->all());

            return redirect()->route('countries.index')->with('success', 'Country created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit(Country $country)
    {
        try {
            return view('admin.countries.create', compact('country'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, Country $country)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $country->update($request->all());

            return redirect()->route('countries.index')->with('success', 'Country updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Country $country)
    {
        try {
            $country->delete();

            return redirect()->route('countries.index')->with('success', 'Country deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
