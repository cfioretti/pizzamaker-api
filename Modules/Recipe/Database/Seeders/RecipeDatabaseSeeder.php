<?php

namespace Modules\Recipe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RecipeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('ingredients')->insert([
            'total' => 1800,
            'flour' => 1000,
            'water' => 750,
            'salt' => 750,
            'oil' => 750,
            'yeast' => 750,
            'others' => ''
        ]);

        DB::table('recipes')->insert([
            'name' => 'Pizza Romana',
            'description' => 'Pizza in teglia romana. Idratazione 75%. Lievitazione 24 ore.',
            'user_id' => 1,
            'ingredient_id' => 1
        ]);
    }
}
