<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Almeida',
            'cpf' => '999.999.999-99',
            'surname' => 'Silva',
            'level_id' => 3,
            'registration' => 12456678,
            'email' => 'root@root.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos',
            'cpf' => '999.999.999-77',
            'surname' => 'Santos',
            'level_id' => 1,
            'registration' => null,
            'email' => 'cliente@cliente.com',
            'email_verified_at' => now(),
            'password' => Hash::make('cliente'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
