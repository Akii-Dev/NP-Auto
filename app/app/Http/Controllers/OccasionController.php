<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use App\Models\Picture;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;




class OccasionController extends Controller
{
    // Richy's section


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



    // Aki's section
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

        // validate multiple images (optional)
        $validatedImage = $request->validate([
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:8192', // any image up to 8MB each
        ]);


        // there isn't really a difference between calling the factory or not
        $occasion = Occasion::factory()->create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'plate' => $validated['plate'],
            'mileage' => $validated['mileage'],
            'description' => $validated['description'],
        ]);

        // handle multiple image uploads if validated images exist
        if (!empty($validatedImage['images'])) {
            foreach ($validatedImage['images'] as $image) {
                $randName = bin2hex(random_bytes(4)); // eg. ef5ff86e
                $extension = $image->getClientOriginalExtension(); // eg. jpg.
                $filename = date("ydm") . '_' . $randName . '.' . $extension; // eg. 262901_ef5ff86e.jpg 
                $image->storeAs('public', $filename); // store in laravels storage. this is gitignored

                Picture::factory()->create([
                    'occasion_id' => $occasion->id,
                    'filename' => $filename,
                ]);
            }
        }






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
            'mileage' => 'required|numeric|max:2147483647', // can also be 99999. counters don't go over that. 2.1b is the int limit
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
