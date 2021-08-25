<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                "nom"=>"type1"
            ],
            [
                "nom"=>"type2"
            ],
            [
                "nom"=>"type3"
            ],
            [
                "nom"=>"type4"
            ],
            [
                "nom"=>"type5"
            ],
            [
                "nom"=>"type6"
            ],
            [
                "nom"=>"type7"
            ],
            [
                "nom"=>"type8"
            ],
            [
                "nom"=>"type9"
            ],
            [
                "nom"=>"type10"
            ],
        ]);
    }
}
