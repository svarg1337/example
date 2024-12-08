<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        for ($i = 1; $i < 11; $i++) {
            DB::table('products')->insert([
                'title' => 'Product '.$i,
                'price' => rand(900, 2500),
                'in_stock' => 1,
                'description' => 'Вечер в хату, часик в радость, чифир в сладость, ногам ходу, голове приходу, матушку удачу, сто тузов по сдаче, ходу воровскому, смерти мусорскому, арестанты.',
                'show_on_home' => rand(0, 1),
            ]);
        }
    }
}
