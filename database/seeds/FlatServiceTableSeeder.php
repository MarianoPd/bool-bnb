<?php

// importo i model
use App\Flat;
use App\Service;

use Illuminate\Database\Seeder;

class FlatServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 40; $i++){
            $flat = Flat::inRandomOrder()->first();

            $service_id = Service::inRandomOrder()->first()->id;

            if(!$this->isPresent($service_id,  $flat->services)){
                
                $flat->services()->attach($service_id);

            }

        }
    }

    private function isPresent($newServiceId, $flatServices){
        $result = false;
        foreach ($flatServices as $service){
            if($service->id === $newServiceId) $result = true;
        }

        return $result;
    }
}
