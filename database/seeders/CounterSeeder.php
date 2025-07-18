<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('counters')->insert([
            'key' => 'page_visits',
            'value' => 0
        ]);
    }
}