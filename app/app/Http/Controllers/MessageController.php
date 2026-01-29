<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        return view('contactpage');
    }

    public function store(Request $request)
    {
        // Validatie van de input

        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'nullable|string|max:20',
            'message'    => 'required|string|min:10',
        ]);

        // Opslaan in de database
        Message::create([
            'title'   => $validated['title'],
            'name'    => $validated['first_name'] . ' ' . $validated['last_name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'] ?? '',
            'content' => $validated['message'],
        ]);

        // Terug naar de pagina + succesmelding
        return back()->with('success', 'Uw bericht is verzonden. We nemen zo snel mogelijk contact op.');
    }
}
