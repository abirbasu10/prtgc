<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

            
            $this->call(RolesTableSeeder::class);
            $this->call(ConnectRelationshipsSeeder::class);
            $this->call(ThemesTableSeeder::class);
            $this->call(UsersTableSeeder::class);
			$this->call(PatientsTableSeeder::class);
			$this->call(AccountsTableSeeder::class);

        Model::reguard();
    }
}