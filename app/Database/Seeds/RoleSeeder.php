<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\RoleModel;

class RoleSeeder extends Seeder
{
	public function run()
	{
		$role_object = new RoleModel();

		$role_object->insertBatch([
			[
				"id" => 1,
				"nama" => "Administrator",
				"keterangan" => "Role for Administrator"
			],
			[
				"id" => 2,
				"nama" => "HRD",
				"keterangan" => "Role for HRD"
			]
		]);
	}
}