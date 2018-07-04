<?php

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<10;$i++){
            DB::table('levels')->insert([
                'name_en' => str_random(10),
                'name_ar' => str_random(10),
                'order' => rand(1,100),
            ]);
        }

    }
}
