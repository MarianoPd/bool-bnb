<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ['Piscina', 'Wifi', 'Lavastoviglie', 'Cucina', 'Self check-in', 'Parcheggio', 'Palestra', 'Aria condizionata', 'Riscaldamento'];
        
        foreach($services as $service){
            $new_service = new Service();
            $new_service->name = $service;
            $new_service->save();
        }
    }
}
