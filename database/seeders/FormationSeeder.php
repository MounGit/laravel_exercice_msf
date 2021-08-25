<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "nom"=>"form1",
                "descr"=>"form1 description"
            ],
            [
                "nom"=>"form2",
                "descr"=>"form2 description"
            ],
            [
                "nom"=>"form3",
                "descr"=>"form3 description"
            ],
            [
                "nom"=>"form4",
                "descr"=>"form4 description"
            ],
            [
                "nom"=>"form5",
                "descr"=>"form5 description"
            ],
            [
                "nom"=>"form6",
                "descr"=>"form6 description"
            ]
        ]);
    }
}
