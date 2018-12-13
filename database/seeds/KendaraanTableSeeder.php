<?php

use Illuminate\Database\Seeder;

class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Kendaraan::insert([
    		[
		      'nama_kendaraan'  => 'mobil',
		      'jenis_kendaraan' => 'roda empat',
		      'buatan'          => 'jepang',
		      'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
    		],
    		[
		      'nama_kendaraan'  => 'motor',
		      'jenis_kendaraan' => 'roda dua',
		      'buatan'          => 'china',
		      'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
    		],
    		[
		      'nama_kendaraan'  => 'sepeda',
		      'jenis_kendaraan' => 'roda dua',
		      'buatan'          => 'china',
		      'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
    		],
    	]);
    }
}