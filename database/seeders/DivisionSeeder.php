<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Division::create([
			'name' => 'Division General',
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Producto',
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Operaciones',
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy',
			'division_id' => 1,
			'ambassador_id' => 4,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Growth',
			'division_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 2',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 3',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 4',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 5',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);
		
		Division::create([
			'name' => 'Strategy 6',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 7',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 8',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 9',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 10',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);

		Division::create([
			'name' => 'Strategy 11',
			'division_id' => 2,
			'ambassador_id' => 1,
			'num_collaborators' => rand(1, 50),
			'level' => rand(1,50)
		]);
    }
}
