<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
        

		//disable foreign key check for this connection before running seeders
		 Schema::disableForeignKeyConstraints();;
			
		$this->call( class:RolesTableSeeder::class);
        $this->call( class:UsersTableSeeder::class);

		// supposed to only apply to a single connection and reset it's self
		// but I like to explicitly undo what I've done for clarity
		 Schema::enableForeignKeyConstraints();
        // \App\Models\User::factory(10)->create();
    }
}
