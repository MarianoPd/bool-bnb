<?php

use Illuminate\Database\Seeder;
use App\Flat;

class FlatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flats =[
            [
                'user_id'=> 1,
                'title' => 'Bellissima villa sul mare',
                'city' => 'Cagliari',
                'province' => 'CA',
                'address' => 'Via Pessagno',
                'latitude' => 39.201720,
                'longitude' => 9.135520,
                'room_number' => 5,
                'bed_number' => 2,
                'bathroom_number' => 2,
                'square_meters' => 110,
            ],   
            [
                'user_id'=> 1,
                'title' => 'Nuovissimo attico in centro',
                'city' => 'Milano',
                'province' => 'MI',
                'address' => 'Piazza Gae Aulenti',
                'latitude' => 45.483318,
                'longitude' => 9.189580,
                'room_number' => 6,
                'bed_number' => 4,
                'bathroom_number' => 2,
                'square_meters' => 150,
            ],  
            [
                'user_id'=> 1,
                'title' => 'Pittoresco agriturismo',
                'city' => 'Firenze',
                'province' => 'FI',
                'address' => 'Borgo Pinti',
                'latitude' => 43.774830,
                'longitude' => 11.264600,
                'room_number' => 8,
                'bed_number' => 5,
                'bathroom_number' => 3,
                'square_meters' => 190,
            ],  
            [
                'user_id'=> 1,
                'title' => 'Appartamento perfetto per fuorisede',
                'city' => 'Milano',
                'province' => 'MI',
                'address' => 'Via Solari',
                'latitude' => 45.455170,
                'longitude' => 9.162380,
                'room_number' => 4,
                'bed_number' => 4,
                'bathroom_number' => 1,
                'square_meters' => 100,
            ],  
            [
                'user_id'=> 1,
                'title' => "Trilocale con vista sull'Arno",
                'city' => 'Firenze',
                'province' => 'FI',
                'address' => 'Lungarno Americo Vespucci',
                'latitude' => 43.773190,
                'longitude' => 11.242160,
                'room_number' => 3,
                'bed_number' => 2,
                'bathroom_number' => 1,
                'square_meters' => 95,
            ], 
            [
                'user_id'=> 2,
                'title' => "Quadrilocale a 100m da San Siro",
                'city' => 'Milano',
                'province' => 'MI',
                'address' => 'Via Tesio',
                'latitude' => 45.478395,
                'longitude' => 9.117361,
                'room_number' => 4,
                'bed_number' => 2,
                'bathroom_number' => 2,
                'square_meters' => 115,
            ],  
            [
                'user_id'=> 2,
                'title' => "Monolocale in pieno centro",
                'city' => 'Milano',
                'province' => 'MI',
                'address' => 'Piazzale Giuseppe Missori',
                'latitude' => 45.460662,
                'longitude' => 9.188234,
                'room_number' => 1,
                'bed_number' => 1,
                'bathroom_number' => 1,
                'square_meters' => 45,
            ],  
            [
                'user_id'=> 2,
                'title' => "Nuovo trilocale arredato",
                'city' => 'Prato',
                'province' => 'PO',
                'address' => 'Via della Misericordia',
                'latitude' => 43.880268,
                'longitude' => 11.090404,
                'room_number' => 3,
                'bed_number' => 1,
                'bathroom_number' => 1,
                'square_meters' => 100,
            ],  
            [
                'user_id'=> 2,
                'title' => "Appartamento vicino UniPv",
                'city' => 'Pavia',
                'province' => 'PV',
                'address' => 'Via Roma',
                'latitude' => 45.187244,
                'longitude' => 9.153794,
                'room_number' => 4,
                'bed_number' => 1,
                'bathroom_number' => 2,
                'square_meters' => 120,
            ],    
        ];

        foreach ($flats as $flat) {

            $new_flat = new Flat();

            $new_flat->user_id = $flat['user_id'];
            $new_flat->title = $flat['title'];
            $new_flat->slug = Flat::getSlug($new_flat->title);
            $new_flat->city = $flat['city'];
            $new_flat->province = $flat['province'];
            $new_flat->address = $flat['address'];
            $new_flat->latitude = $flat['latitude'];
            $new_flat->longitude = $flat['longitude'];
            $new_flat->room_number = $flat['room_number'];
            $new_flat->bed_number = $flat['bed_number'];
            $new_flat->bathroom_number = $flat['bathroom_number'];
            $new_flat->square_meters = $flat['square_meters'];

            $new_flat->save();

        }

    }
}

