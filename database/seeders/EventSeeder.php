<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'user_id' => 1,
                'home_id' => 1,
                'rented' => false,
                'limit' => Carbon::now()->addDays(4)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(5)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(6)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'home_id' => 1,
                'rented' => true,
                'limit' => Carbon::now()->addDays(3)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(10)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(11)->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'home_id' => 1,
                'rented' => true,
                'limit' => Carbon::now()->addDays(9)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(16)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(18)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'home_id' => 2,
                'rented' => false,
                'limit' => Carbon::now()->addDays(4)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(5)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(6)->toDateTimeString(),
            ],
            [
                'user_id' => 1,
                'home_id' => 2,
                'rented' => true,
                'limit' => Carbon::now()->addDays(4)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(11)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(15)->toDateTimeString(),
            ],
            [
                'user_id' => 2,
                'home_id' => 2,
                'rented' => true,
                'limit' => Carbon::now()->addDays(9)->toDateTimeString(),
                'start' =>  Carbon::now()->addDays(16)->toDateTimeString(),
                'end' =>  Carbon::now()->addDays(17)->toDateTimeString(),
            ],
        ]);
    }
}