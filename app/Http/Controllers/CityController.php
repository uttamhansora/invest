<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use Exception;

class CityController extends Controller
{
    public function index()
    {
        try {
            $cities = City::all();
            return view('admin.cities.index', compact('cities'));
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        try {
            $states = State::all();
            return view('admin.cities.create', compact('states'));
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'state_id' => 'required|exists:states,id'
            ]);

            City::create([
                'name' => $request->name,
                'state_id' => $request->state_id
            ]);

            return redirect()->route('cities.index')->with('success', 'City created successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        try {
            $city = City::findOrFail($id);
            $states = State::all();
            return view('admin.cities.create', compact('city', 'states'));
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'state_id' => 'required|exists:states,id'
            ]);

            $city = City::findOrFail($id);
            $city->update([
                'name' => $request->name,
                'state_id' => $request->state_id
            ]);

            return redirect()->route('cities.index')->with('success', 'City updated successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $city = City::findOrFail($id);
            $city->delete();
            return redirect()->route('cities.index')->with('success', 'City deleted successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
