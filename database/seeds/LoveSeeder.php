<?php

use Illuminate\Database\Seeder;

class LoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Love::class, 10)->create();
    }
}
