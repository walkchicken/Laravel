<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'musicadmin']);
        Role::create(['name' => 'musicmember']);
        Role::create(['name' => 'footballadmin']);
        Role::create(['name' => 'footballmember']);
        Role::create(['name' => 'sv5admin']);
        Role::create(['name' => 'sv5member']);
        Role::create(['name' => 'hotbloodadmin']);
        Role::create(['name' => 'hotbloodmember']);
        Role::create(['name' => 'skillsadmin']);
        Role::create(['name' => 'skillsmember']);
        Role::create(['name' => 'datecadmin']);
        Role::create(['name' => 'datecmember']);
    }
}
