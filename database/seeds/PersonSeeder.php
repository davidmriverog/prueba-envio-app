<?php

use Illuminate\Database\Seeder;

use App\Person;
use App\Location;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = new Person;
        $person->full_name = "David Rivero";
        $person->age = "28";
        
        $person->save();

        $location = new Location;

        $location->description_address = "Mendoza 173, Salta, Salta";
        $location->lat = "-24.7953598";
        $location->log = "-65.4076679";

        $person->locations()->save($location);
    }
}
