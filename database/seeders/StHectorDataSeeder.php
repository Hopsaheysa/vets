<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Owner;
use App\Models\Pet;

class StHectorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_string = file_get_contents('./storage/clients.json'); // replace path with a real path
        $data = json_decode($json_string); // decode the string into data
        DB::table('pets')->truncate();
        DB::table('owners')->truncate();

        foreach ($data as $owner) {
            $client = new Owner;
            $client->first_name = $owner->first_name;
            $client->surname = $owner->surname;
            $client->home_address = "";
            $client->email = "";
            $client->phone = "";
             
            $client->save();
            
            foreach($owner->pets as $animal ) {
                $pet = new Pet;
                $pet->owner_id = $client->id;
                $pet->name = $animal->name; 
                $pet->breed = $animal->breed;
                $pet->weight = $animal->weight ?? 0;
                $pet->age = $animal->age ?? 0;
                $pet->photo_path = $animal->photo;
                $pet->save();
            }

        }


    }
}
