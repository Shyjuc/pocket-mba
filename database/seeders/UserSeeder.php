<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use App\Models\OrganizationUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user =  User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('password'),
        ]);

        $organization =Organization::create([
            'name' => 'John Doe Inc',
            'owner_id' => $user->id
        ]);

        $organization =OrganizationUser::create([
            'organization_id' => $organization->id,
            'user_id' => $user->id
        ]);


    }
}
