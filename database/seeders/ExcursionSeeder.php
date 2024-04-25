<?php
use Illuminate\Database\Seeder;
use App\Models\Excursion; // Assuming your Excursion model is in the App\Models namespace

class ExcursionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample excursions
        $excursions = [
            [
                'date' => '2024-05-01',
                'description' => 'Explore the beautiful mountains',
                'duration' => '2 days',
                'image' => 'public/assets/img/Siroua-.jpg',
                'location' => 'Mountain Range',
                'title' => 'Siroua',
                'prix' => 1500, // Example price
                'user_id' => 1, // Example user ID
            ],
            [
                'date' => '2024-05-01',
                'description' => 'Explore the beautiful mountains',
                'duration' => '2 days',
                'image' => 'public/assets/img/toubkal.jpg',
                'location' => 'Mountain Range',
                'title' => 'Toubkal',
                'prix' => 1000, // Example price
                'user_id' => 2, // Example user ID
            ],
            // Add more excursions as needed
        ];

        // Insert the excursions into the database
        foreach ($excursions as $excursionData) {
            Excursion::create($excursionData);
        }
    }
}
