<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::insert([
            [
                'id' => 1,
                'title' => 'Les rondins du lac',
                'text1' => 'Un emplacement de rêve',
                'text2' => 'Une vue inégalée',
                'text3' => 'Un calme absolu',
                'image' => 'gite1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'L\'avenir est déjà là',
                'text1' => 'Une architecture unique',
                'text2' => 'Une piscine langoureuse',
                'text3' => 'Une lumière enchanteresse',
                'image' => 'gite2.jpg',
            ],
        ]);
    }
}
