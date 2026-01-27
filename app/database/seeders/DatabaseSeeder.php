<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Occasion;
use App\Models\Service;
use App\Models\Message;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        $countOccasions = 10;
        $countServices = 4;
        $countMessages = 5;
        // $countPictures = 3;

        Occasion::factory($countOccasions)->create();
        Service::factory($countServices)->create();
        Message::factory($countMessages)->create();

    }
}
