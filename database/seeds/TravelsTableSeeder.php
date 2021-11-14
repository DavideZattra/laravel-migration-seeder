<?php

use App\Models\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                "destination"=> 'destination',
                "commercial_name"=> 'natale alle maldive',
                "duration" => 15,
                "departure_date" => '2021/12/21',
                "description" => 'Lorem ipsum',
                "price" => 1555.55,
            ],
            [
                "destination"=> 'destination',
                "commercial_name"=> 'natale alle canarie',
                "duration" => 15,
                "departure_date" => '2021/12/21',
                "description" => 'Lorem ipsum',
                "price" => 1555.55,
            ]

        ];

        foreach ( $travels as $travel){
            $newTravel = new Travel();
            $newTravel->destination = $travel['destination'];
            $newTravel->commercial_name = $travel['commercial_name'];
            $newTravel->duration = $travel['duration'];
            $newTravel->departure_date = $travel['departure_date'];
            $newTravel->description = $travel['description'];
            $newTravel->price = $travel['price'];
            $newTravel->save();

        }
    }
}
