<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use App\Models\Country;

class StateController extends Controller
{
    public function index()
    {
        try {
            
            $states = State::all();
            return view('admin.states.index', compact('states'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        $countries = Country::all();
        // You can pass any necessary data to the create view if needed
        return view('admin.states.create',compact('countries'));
    }

    public function store(Request $request)
    {
        try {
            // Validate incoming data
            $request->validate([
                'name' => 'required|string|max:255',
                'country_id' => 'required|exists:countries,id'
            ]);

            // Create a new state
            State::create($request->all());

            return redirect()->route('states.index')->with('success', 'State created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function edit(State $state)
    {
        try {
            $countries = Country::all();
            // Pass the state object to the edit view
            return view('admin.states.create', compact('state','countries'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, State $state)
    {
        try {
            // Validate incoming data
            $request->validate([
                'name' => 'required|string|max:255',
                'country_id' => 'required|exists:countries,id'
            ]);

            // Update the state
            $state->update($request->all());

            return redirect()->route('states.index')->with('success', 'State updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function destroy(State $state)
    {
        try {
            // Delete the state
            $state->delete();

            return redirect()->route('states.index')->with('success', 'State deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
