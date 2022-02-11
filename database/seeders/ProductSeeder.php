<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            'pname' => 'londom shoe',
            'pprice' => '$500',
            'pgallery' => 'img/shoe.jpg'
        ]);
    }
}
