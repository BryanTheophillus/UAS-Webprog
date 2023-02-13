<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Accounts = [  ['role_id' => '1', 'gender_id' => '1', 'first_name' => 'Admin', 'last_name' => 'admin', 'email' => 'admin@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '1', 'first_name' => 'User', 'last_name' => 'user', 'email' => 'user@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '1', 'first_name' => 'Andi', 'last_name' => 'Susanto', 'email' => 'andi.susanto@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '1', 'first_name' => 'Budi', 'last_name' => 'Purnomo', 'email' => 'budi.purnomo@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '1', 'first_name' => 'Cahyo', 'last_name' => 'Dwi', 'email' => 'cahyo.dwi@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '2', 'first_name' => 'Dini', 'last_name' => 'Wulan', 'email' => 'dini.wulan@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '2', 'first_name' => 'Eka', 'last_name' => 'Sari', 'email' => 'eka.sari@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '2', 'first_name' => 'Fauziah', 'last_name' => 'Nur', 'email' => 'fauziah.nur@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
                        ['role_id' => '2', 'gender_id' => '2', 'first_name' => 'Gina', 'last_name' => 'Putri', 'email' => 'gina.putri@gmail.com', 'display_picture_link' => 'images/user.png', 'password' => bcrypt('Testing123')],
        ];

        foreach ($Accounts as $Account) {
            Account::create([
                'role_id' => $Account['role_id'],
                'gender_id' => $Account['gender_id'],
                'first_name' => $Account['first_name'],
                'last_name' => $Account['last_name'],
                'email' => $Account['email'],
                'display_picture_link' => $Account['display_picture_link'],
                'password' => $Account['password']
            ]);
        }
    }
}
// {{-- Bryan Theophillus - 2401953966 --}}
