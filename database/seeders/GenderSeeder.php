<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;
class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender= ['Male', 'Female'];
        for ($i=0; $i < count($gender); $i++) {
            Gender::create([
                'gender_desc' => $gender[$i],
            ]);
        }
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
