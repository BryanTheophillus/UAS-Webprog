<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'User'];
        for ($i=0; $i < count($roles); $i++) {
            Role::create([
                'role_name' => $roles[$i],
            ]);
        }
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
