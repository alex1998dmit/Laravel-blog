<?php

use Illuminate\Database\Seeder;

class SettingsTablSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

           'site_name' => 'Laravels blog',

            'address' => 'Russia',

            'contact_number' => '89373864537',



        ]);
    }
}
