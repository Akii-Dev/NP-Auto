<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Http\Request;

class OccasionController extends Controller
{
    public function create()
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }
        

        return view('occasion.create');
    }

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
        $booking = Occasion::factory()->create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'plate' => $validated['plate'],
            'mileage' => $validated['mileage'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('admin.index')->with('success', 'Occasion aangemaakt!');

    }
}
