<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Support\Facades\Http;

class OccasionController extends Controller
{
    public function index()
    {
        // 🔹 RDW test fetch (optioneel, alleen voor testen)
        $kentekens = ['XZ993D'];

        foreach ($kentekens as $kenteken) {
            $occasion = Occasion::where('plate', $kenteken)->first();

            // haal data uit RDW API
            $response = Http::get('https://opendata.rdw.nl/resource/m9d7-ebf2.json', [
                'kenteken' => $kenteken
            ]);

            if ($response->successful() && !empty($response->json())) {
                $data = $response->json()[0];

                if (!$occasion) {
                    Occasion::create([
                        'title' => $data['handelsbenaming'] ?? 'Onbekend',
                        'brand' => $data['merk'] ?? 'Onbekend',
                        'plate' => $kenteken,
                        'price' => $data['catalogusprijs'] ?? 0,
                        'description' => 'Auto van NP Auto',
                        'mileage' => $data['kilometerstand'] ?? 0,
                        'sold' => false,
                        'visible' => true,
                    ]);
                } else {
                    $occasion->update([
                        'brand' => $data['merk'] ?? $occasion->brand,
                    ]);
                }
            }
        }

        // 🔹 Filter systeem
        $query = Occasion::query();

        if ($maxKm = request('max_km')) {
            $query->where('mileage', '<=', $maxKm);
        }

        if ($maxPrice = request('max_price')) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($brand = request('brand')) {
            $query->where('brand', $brand);
        }

        if (request('hide_sold')) {
            $query->where('sold', false);
        }

        $query->where('visible', true);

        // 🔹 Paginering van 12 per pagina
        $occasions = $query->paginate(12)->withQueryString();

        $brands = Occasion::whereNotNull('brand')
            ->where('visible', true)
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        return view('occasion.index', compact('occasions', 'brands'));
    }

    public function show(Occasion $occasion)
    {
        return view('occasion.show', compact('occasion'));
    }
}
