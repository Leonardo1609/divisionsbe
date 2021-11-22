<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbassadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('ambassadors')->insert([
			'name' => 'Jordyn Herwitz',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);

		DB::table('ambassadors')->insert([
			'name' => 'Carla Siphron',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);

		DB::table('ambassadors')->insert([
			'name' => 'Terry Press',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);

		DB::table('ambassadors')->insert([
			'name' => 'Kierra Rosser',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
    }
}
