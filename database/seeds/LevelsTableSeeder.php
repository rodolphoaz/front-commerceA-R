<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    private $level = ['cliente' , 'funcionario','administrator'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->level as $key => $value):
        DB::table('levels')->insert([
            'description' => $value,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        endforeach;
    }
}
