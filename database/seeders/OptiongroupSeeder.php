<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Optiongroup;

class OptiongroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Optiongroup::create([
            'name' => 'proposal_statuses',
            'label' => 'Proposal Statuses',
            'description' => 'Proposal Statuses',
            'display_order' => '0',   
        ]);

        Optiongroup::create([
            'name' => 'organization_statuses',
            'label' => 'Organization Statuses',
            'description' => 'Organization Statuses',
            'display_order' => '0',   
        ]);

        Optiongroup::create([
            'name' => 'company_status',
            'label' => 'Company Status',
            'description' => 'Company Status',
            'display_order' => '0',   
        ]);

        Optiongroup::create([
            'name' => 'nature_of_the_business',
            'label' => 'Nature Of The Business',
            'description' => 'Nature Of The Business',
            'display_order' => '0',   
        ]);

        Optiongroup::create([
            'name' => 'shareholders_type',
            'label' => 'Shareholders Type',
            'description' => 'Shareholders Type',
            'display_order' => '0',   
        ]);
        
        Optiongroup::create([
            'name' => 'business_function',
            'label' => 'BUSINESS FUNCTION',
            'description' => 'BUSINESS FUNCTION',
            'display_order' => '0',   
        ]);

        Optiongroup::create([
            'name' => 'personnel_type',
            'label' => 'Personnel Type',
            'description' => 'Personnel Type',
            'display_order' => '0',   
        ]);

        Optiongroup::create([
            'name' => 'stages_type',
            'label' => 'Stages Type',
            'description' => 'Stages Type',
            'display_order' => '0',   
        ]);

        
    }
}
