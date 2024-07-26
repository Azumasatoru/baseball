<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matches')->insert([
            'tornament name' => '練習試合',
            'team_id' => 1,
            'opponent' => 'Lions',
            'get point' => 8,
            'lost point' => 6,
            'date' => Carbon::create(2024, 6, 28),
            'location' => '楽天生命パーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
