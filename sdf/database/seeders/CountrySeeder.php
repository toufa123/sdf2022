<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Carbon\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();
        $countries = [
            ['code' => 'AL','country_name' => 'Albania', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['code' => 'DZ','country_name' => 'Algeria'],
            ['code' => 'BA','country_name' => 'Bosnia and Herzegovina'],
            ['code' => 'HR','country_name' => 'Croatia'],
            ['code' => 'CY','country_name' => 'Cyprus'],
            ['code' => 'EG','country_name' => 'Egypt'],
            ['code' => 'FR', 'country_name' => 'France' ],
            ['code' => 'GR','country_name' => 'Greece'],
            ['code' => 'IL', 'country_name' => 'Israel'],
            ['code' => 'IT','country_name' => 'Italy'],
            ['code' => 'LB', 'country_name' => 'Lebanon'],
            ['code' => 'LY', 'country_name' => 'Libya'],
            ['code' => 'MT', 'country_name' => 'Malta'],
            ['code' => 'MC', 'country_name' => 'Monaco'],
            ['code' => 'ME', 'country_name' => 'Montenegro'],
            ['code' => 'MA', 'country_name' => 'Morocco'],
            ['code' => 'SI', 'country_name' => 'Slovenia'],
            ['code' => 'ES', 'country_name' => 'Spain'],
            ['code' => 'SY', 'country_name' => 'Syrian Arab Republic'],
            ['code' => 'TN', 'country_name' => 'Tunisia'],
            ['code' => 'TR', 'country_name' => 'Turkey'],
        ];

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }

}
