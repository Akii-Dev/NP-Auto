<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Http\Request;

class OccasionController extends Controller
{
    // displays the interface to create a new occasion
    public function create()
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }


        return view('occasion.create');
    }

    // stores the new occasion in the database
    public function store(Request $request)
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }

        $validated = $request->validate([
            'title' => 'required|string|unique:occasions,title',
            'price' => 'required|numeric|max:20000', // cars cannot cost more than 20k
            'plate' => 'required|string',
            'mileage' => 'required|numeric|max:2147483647', // literally just the integer limit
            'description' => 'required|string|max:500',
        ]);

        // there isn't really a difference between calling the factory or not
        $occasion = Occasion::factory()->create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'plate' => $validated['plate'],
            'mileage' => $validated['mileage'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('admin.index')->with('success', 'Occasion aangemaakt!');
    }

    public function edit($id)
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        // check if occasion exists
        $occasion = Occasion::find($id);
        if (!$occasion) {
            return redirect()->route('admin.index')->with('error', 'Occasion bestaat niet!');
        }
        return view('occasion.edit', ['occasion' => $occasion]);
    }

    public function update(Request $request, $id)
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        // check if occasion exists
        $occasion = Occasion::find($id);
        if (!$occasion) {
            return redirect()->route('admin.index')->with('error', 'Occasion bestaat niet!');
        }

        $validated = $request->validate([
            'title' => 'required|string|unique:occasions,title,' . $occasion->id,
            'price' => 'required|numeric|max:20000',
            'plate' => 'required|string',
            'mileage' => 'required|numeric|max:2147483647',
            'description' => 'required|string|max:500',
        ]);

        $occasion->update($validated); // we can mass assign as these names correspond with fillable in the model

        return redirect()->route('admin.index')->with('success', 'Occasion bijgewerkt!');
    }

    public function destroy($id)
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        // check if occasion exists
        $occasion = Occasion::find($id);
        if (!$occasion) {
            return redirect()->route('admin.index')->with('error', 'Occasion bestaat niet!');
        }

        $occasion->delete(); // use the eloquent delete method. no need for manual queries

        return redirect()->route('admin.index')->with('success', 'Occasion verwijderd!');
    }
}
