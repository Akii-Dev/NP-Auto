<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // displays the interface to create a new service
    public function create()
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }


        return view('service.create');
    }

    // stores the new service in the database
    public function store(Request $request)
    {
        // check if user is authenticated
        if (!session()->has('user')) {
            return redirect('/login');
        }

        $validated = $request->validate([
            'title' => 'required|string|unique:services,title',
            'price' => 'required|numeric|max:999.99', // services cannot cost more than 999.99
            'description' => 'required|string|max:500',
        ]);

        // there isn't really a difference between calling the factory or not
        $service = Service::factory()->create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('admin.index')->with('success', 'Service aangemaakt!');
    }
}
