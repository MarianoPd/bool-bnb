<?php

use Illuminate\Database\Seeder;

use App\Sponsorship;

class SponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships =[
            [
                'name'=> "Basic",
                'price' => 2.99,
                'duration' => 24,
            ],
            [
                'name'=> "Advanced",
                'price' => 5.99,
                'duration' => 72,
            ],
            [
                'name'=> "Premium",
                'price' => 9.99,
                'duration' => 144,
            ],
                
            
        ];

        foreach($sponsorships as $sponsorship){
            $new_spo = new Sponsorship();
            $new_spo->name = $sponsorship['name'];
            $new_spo->price = $sponsorship['price'];
            $new_spo->duration = $sponsorship['duration'];
            $new_spo->save();
        }
    }
}