<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Occasion;
use App\Models\Service;
use App\Models\Message;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\PHP;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'John Phone', // niche ref
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'), // very unique and secure password
        ]);

        // Number of entries when using the factories
        // $countOccasions = 10;
        // $countServices = 4;
        // $countMessages = 5;
        // // $countPictures = 3;

        // Create these fields using factory random data
        // Occasion::factory($countOccasions)->create(); // not needed if using json data
        // Service::factory($countServices)->create(); // not needed if using json data
        // Message::factory($countMessages)->create();

        $jsonOccasions = file_get_contents(database_path('data/occasions.json')); // 
        $jsonServices = file_get_contents(database_path('data/services.json')); 

		// decode json data to php array
        $occasionData = json_decode($jsonOccasions, true);
        $serviceData = json_decode($jsonServices, true);

        // loop through the json entries and create occasions
        echo PHP_EOL . "Seeding occasions..." . PHP_EOL;

        foreach ($occasionData as $occasion) {
            Occasion::factory()->create([
                'title' => $occasion['title'],
                'price' => $occasion['price'],
                'plate' => $occasion['plate'],
                'description' => $occasion['description'],
                'mileage' => $occasion['mileage'],
            ]);
            echo "Added " . $occasion['title'] . PHP_EOL;
        }

        // loop through the json entries and create services
		echo PHP_EOL . "Seeding services..." . PHP_EOL;

        foreach ($serviceData as $service) {
            Service::factory()->create([
				'title' => $service['title'],
				'price' => $service['price'],
				'description' => $service['description'],
			]);
			echo "Added service " . $service['title'] . PHP_EOL;
        }
    }
}
