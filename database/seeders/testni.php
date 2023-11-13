<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class testni extends Seeder
{

    public function run(): void
    {
        DB::connection('mysql')->table('jezici-jela')->insert([
        'name_hr' => Str::random(10),
        'name_en' => Str::random(10),
        ]);
        DB::connection('mysql3')->table('jezici-kategorije')->insert([
            'name_hr' => Str::random(10),
            'name_en' => Str::random(10),
        ]);
        DB::connection('mysql2')->table('jezici-sastojci')->insert([
            'name_hr' => Str::random(10),
            'name_en' => Str::random(10),
        ]);
        DB::connection('mysql4')->table('jezici-tagovi')->insert([
            'name_hr' => Str::random(10),
            'name_en' => Str::random(10),
        ]);
    }

}
