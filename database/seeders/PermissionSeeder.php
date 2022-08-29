<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolepermission = DB::table('permissions')->where('name','superadmin')->first();

        $creat_option = DB::table('permissions')->insert([
            'name' => 'creat_option',
            'guard_name' => 'creat option'
        ]);

        $view_option = DB::table('permissions')->insert([
            'name' => 'view_option',
            'guard_name' => 'view option'
        ]);

        $update_option = DB::table('permissions')->insert([
            'name' => 'update_option',
            'guard_name' => 'update option'
        ]);

        $delete_option = DB::table('permissions')->insert([
            'name' => 'delete_option',
            'guard_name' => 'delete option'
        ]);

        $creat_optiongrp = DB::table('permissions')->insert([
            'name' => 'creat_optiongrp',
            'guard_name' => 'creat optiongrp'
        ]);

        $view_optiongrp = DB::table('permissions')->insert([
            'name' => 'view_optiongrp',
            'guard_name' => 'view optiongrp'
        ]);

        $update_optiongrp = DB::table('permissions')->insert([
            'name' => 'update_optiongrp',
            'guard_name' => 'update optiongrp'
        ]);

        $delete_optiongrp = DB::table('permissions')->insert([
            'name' => 'delete_optiongrp',
            'guard_name' => 'delete optiongrp'
        ]);

        $rolepermission->option()->save($creat_option);
        $rolepermission->option()->save($view_option);
        $rolepermission->option()->save($update_option);
        $rolepermission->option()->save($delete_option);
        $rolepermission->option()->save($creat_optiongrp);
        $rolepermission->option()->save($view_optiongrp);
        $rolepermission->option()->save($update_optiongrp);
        $rolepermission->option()->save($delete_optiongrp);
        
    }
}
