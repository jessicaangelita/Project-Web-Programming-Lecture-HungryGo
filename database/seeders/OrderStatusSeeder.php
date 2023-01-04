<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([['name'=>'Accepted'], ['name'=>'Cooking'], ['name'=>'Delivering'], ['name'=>'Done']]);
    }
}
