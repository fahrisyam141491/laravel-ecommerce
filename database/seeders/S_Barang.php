<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class S_Barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 50 ; $i++) { 
            DB::table('tbl_barang')->insert([
                'unique_code_barang' => str::random(5),
                'nama_barang' => $faker->name,
                'harga_barang' => $faker->numberBetween(1000,10000),
                'foto_barang' => $faker->image('public/foto_barang',640,480, null, false),
                'ket_barang' => $faker->jobTitle,
            ]);
        }
    }
}
