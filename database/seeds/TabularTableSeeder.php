<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Laravue\Models\Tabular;

class TabularTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tabular::factory()
                    ->count(20)
                    ->create();
    }
}
