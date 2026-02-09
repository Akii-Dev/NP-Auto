<?php

namespace App\Console\Commands;

use App\Models\Occasion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchRdwOccasions extends Command
{
    protected $signature = 'rdw:fetch-occasions {--limit=100} {--offset=0}';
    protected $description = 'Haalt autos op uit RDW API en slaat op in de database.';

    public function handle()
    {
        $limit = $this->option('limit');
        $offset = $this->option('offset');

        $this->info("Fetching $limit occasions from RDW API, offset $offset...");

        $response = Http::get('https://opendata.rdw.nl/resource/m9d7-ebf2.json', [
            '$limit' => $limit,
            '$offset' => $offset
        ]);

        if (!$response->successful()) {
            $this->error("API request failed.");
            return;
        }

        $dataList = $response->json();

        if (empty($dataList)) {
            $this->info("Geen data ontvangen van RDW API.");
            return;
        }

        foreach ($dataList as $data) {
            $kenteken = $data['kenteken'] ?? null;
            if (!$kenteken) continue;

            $brand = $data['merk'] ?? 'Onbekend';
            $handelsbenaming = $data['handelsbenaming'] ?? 'Onbekend';

            // 🔹 Maak title uniek door kenteken toe te voegen
            $title = strtoupper(trim($brand . ' ' . $handelsbenaming . ' (' . $kenteken . ')'));

            $price = isset($data['catalogusprijs']) ? floatval($data['catalogusprijs']) : 0;
            $mileage = isset($data['kilometerstand']) ? intval($data['kilometerstand']) : 0;

            // 🔹 firstOrNew op kenteken (plate) zodat duplicates voorkomen
            $occasion = Occasion::firstOrNew(['plate' => $kenteken]);

            $occasion->title = $title;
            $occasion->brand = $brand;
            $occasion->price = $price;
            $occasion->mileage = $mileage;
            $occasion->description = $occasion->description ?? 'Auto van NP Auto';
            $occasion->sold = $occasion->sold ?? false;
            $occasion->visible = true;

            $occasion->save();
        }

        $this->info("Batch opgeslagen in de database.");
    }
}
