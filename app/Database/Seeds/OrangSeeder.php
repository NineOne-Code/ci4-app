<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
	public function run()
	{
		// $data = [
		// 	[
		// 		'nama' => 'Nine One',
		// 		'alamat'    => 'Jl. Sumatra 378',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	],
		// 	[
		// 		'nama' => 'Nine One',
		// 		'alamat'    => 'Jl. Sumatra 378',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	],
		// 	[
		// 		'nama' => 'Nine One',
		// 		'alamat'    => 'Jl. Sumatra 378',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	],
		// 	[
		// 		'nama' => 'Nine One',
		// 		'alamat'    => 'Jl. Sumatra 378',
		// 		'created_at' => Time::now(),
		// 		'updated_at' => Time::now()
		// 	]
		// ];

		for ($i = 0; $i < 100; $i++) {
			$data = [
				'nama' => static::faker()->name,
				'alamat'    => static::faker()->address,
				'created_at' => Time::createFromTimestamp(static::faker()->unixTime()),
				'updated_at' => Time::now()
			];
			$this->db->table('orang')->insert($data);
		}

		// Simple Queries
		// $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

		// Using Query Builder
		// $this->db->table('orang')->insertBatch($data);
	}
}
