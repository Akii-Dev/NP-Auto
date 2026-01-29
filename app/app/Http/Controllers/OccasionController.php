<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Support\Facades\Http;

class OccasionController extends Controller
{
    public function index()
    {
        $kentekens = ['XZ993D']; // testen laten kan dynamish of zo

        foreach ($kentekens as $kenteken) {
            // check of auto al in database staat
            $occasion = Occasion::where('plate', $kenteken)->first();

            if (!$occasion) {
                // haal data uit RDW API
                $response = Http::get('https://opendata.rdw.nl/resource/m9d7-ebf2.json', [
                    'kenteken' => $kenteken
                ]);

                if ($response->successful() && !empty($response->json())) {
                    $data = $response->json()[0];

                    Occasion::create([
                        'title' => $data['handelsbenaming'] ?? 'Onbekend',
                        'plate' => $kenteken,
                        'price' => $data['catalogusprijs'] ?? 0,
                        'description' => 'Auto van NP Auto',
                        'mileage' => $data['kilometerstand'] ?? 0,
                        'sold' => false,
                        'visible' => true,
                    ]);
                }
            }
        }

        // haal alle occasions uit de database op
        $occasions = Occasion::all();

        return view('occasion.index', compact('occasions'));
    }

    public function show(Occasion $occasion)
    {
        // dit haalt occasion via route
        return view('occasion.show', compact('occasion'));
    }

}
