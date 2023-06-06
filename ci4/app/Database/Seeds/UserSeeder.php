<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
            'username' => 'ademaul',
			'useremail' => 'iiigis0422@gmail.com',
			'userpassword' => password_hash('ademaul1234', PASSWORD_DEFAULT),
        ]);
    }
}