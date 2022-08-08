<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unites')->insert([
            [
                "label" => "litre",
                "abbr" => "l",
            ],
            [
                "label" => "centilitre",
                "abbr" => "cl",
            ],
            [
                "label" => "millilitre",
                "abbr" => "ml",
            ],
            [
                "label" => "kilogramme",
                "abbr" => "kg",
            ],
            [
                "label" => "gramme",
                "abbr" => "g",
            ],
            [
                "label" => "milligramme",
                "abbr" => "mg",
            ],
            [
                "label" => "cuillère à soupe",
                "abbr" => "c. à soupe",
            ],
            [
                "label" => "cuillère à café",
                "abbr" => "c. à café",
            ],
            [
                "label" => "pincée",
                "abbr" => "pincée",
            ],
            [
                "label" => "unité",
                "abbr" => "",
            ],
            [
                "label" => "tranche",
                "abbr" => "",
            ]
        ]);
    }
}
