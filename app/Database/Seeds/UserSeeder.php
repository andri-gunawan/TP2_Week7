<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
	public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"nip" => "10220220001",
				"nama" => "Administrator",
				"email" => "admin@gmail.com",
				"phone" => "082123123123",
				"jenis_kelamin" => "L",
				"alamat" => "Jl. Gatot Subroto No. 40",
				"role_id" => 1,
				"password" => password_hash("12345678", PASSWORD_DEFAULT),
				"created_at" => date('Y-m-d H:i:s'),
				"updated_at" => date('Y-m-d H:i:s'),
				"updated_by" => 1
			],
		]);
	}
}