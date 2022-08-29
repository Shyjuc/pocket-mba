<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Superadmin',
            'guard_name' => 'superadmin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Organization Admin',
            'guard_name' => 'organization_admin'
        ]);
    }
}
