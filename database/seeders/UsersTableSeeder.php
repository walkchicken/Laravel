<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        \DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $musicadminRole = Role::where('name', 'musicadmin')->first();
        $musicmemberRole = Role::where('name', 'musicmember')->first();
        $footballadminRole = Role::where('name', 'footballadmin')->first();
        $footballmemberRole = Role::where('name', 'footballmember')->first();
        $sv5adminRole = Role::where('name', 'sv5admin')->first();
        $sv5memberRole = Role::where('name', 'sv5member')->first();
        $hotbloodadminRole = Role::where('name', 'hotbloodadmin')->first();
        $hotbloodmemberRole = Role::where('name', 'hotbloodmember')->first();
        $skillsadminRole = Role::where('name', 'skillsadmin')->first();
        $skillsmemberRole = Role::where('name', 'skillsmember')->first();
        $datecadminRole = Role::where('name', 'datecadmin')->first();
        $datecmemberRole = Role::where('name', 'datecmember')->first();

        $admin = User::create([
            'name' => 'Admin user' ,
            'email' => 'admin@admin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $musicadmin = User::create([
            'name' => 'Music admin' ,
            'email' => 'musicadmin@musicadmin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $musicmember = User::create([
            'name' => 'Music member' ,
            'email' => 'musicmember@musicmember.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $footballadmin = User::create([
            'name' => 'Football admin' ,
            'email' => 'footballadmin@footballadmin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $footballmember = User::create([
            'name' => 'Football member' ,
            'email' => 'footballmember@footballmember.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $sv5admin = User::create([
            'name' => 'SV5 admin' ,
            'email' => 'sv5admin@sv5admin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $sv5member = User::create([
            'name' => 'SV5 member' ,
            'email' => 'sv5member@sv5member.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $hotbloodadmin = User::create([
            'name' => 'Hot blood admin' ,
            'email' => 'hotbloodadmin@hotbloodadmin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $hotbloodmember = User::create([
            'name' => 'hotblood member' ,
            'email' => 'hotbloodmember@hotbloodmember.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $skillsadmin = User::create([
            'name' => 'Skills admin' ,
            'email' => 'skillsadmin@skillsadmin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $skillsmember = User::create([
            'name' => 'Skills member' ,
            'email' => 'skillsmember@skillsmember.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $datecadmin = User::create([
            'name' => 'Datec admin' ,
            'email' => 'datecadmin@datecadmin.com' ,
            'password' => Hash::make(value: 'password')
        ]);
        $datecmember = User::create([
            'name' => 'Datec member' ,
            'email' => 'datecmember@datecmember.com' ,
            'password' => Hash::make(value: 'password')
        ]);

        $admin->roles()->attach($adminRole);
        $musicadmin->roles()->attach($musicadminRole);
        $musicmember->roles()->attach($musicmemberRole);
        $footballadmin->roles()->attach($footballadminRole);
        $footballmember->roles()->attach($footballmemberRole);
        $sv5admin->roles()->attach($sv5adminRole);
        $sv5member->roles()->attach($sv5memberRole);
        $hotbloodadmin->roles()->attach($hotbloodadminRole);
        $hotbloodmember->roles()->attach($hotbloodmemberRole);
        $skillsadmin->roles()->attach($skillsadminRole);
        $skillsmember->roles()->attach($skillsmemberRole);
        $datecadmin->roles()->attach($datecadminRole);
        $datecmember->roles()->attach($datecmemberRole);
   
    }
}
