<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;
use App\Models\Optiongroup;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // proposal_statuses Options
        $orgstatusgroup = Optiongroup::where('name','proposal_statuses')->first();
        $new = Option::create([
            'name' => 'new', 
            'label' => 'New',
            'description' => 'New',
            'type' => 'text',
            'value' => 'New',            
        ]);
        $rejected = Option::create([
            'name' => 'rejected', 
            'label' => 'Rejected',
            'description' => 'Rejected',
            'type' => 'text',
            'value' => 'Rejected',            
        ]);
        $accepted = Option::create([
            'name' => 'accepted', 
            'label' => 'Accepted',
            'description' => 'Accepted',
            'type' => 'text',
            'value' => 'Accepted',            
        ]);
        $resubmitted = Option::create([
            'name' => 'resubmitted', 
            'label' => 'Resubmitted',
            'description' => 'Resubmitted',
            'type' => 'text',
            'value' => 'Resubmitted',            
        ]);

        
        $orgstatusgroup->option()->save($new);
        $orgstatusgroup->option()->save($rejected);
        $orgstatusgroup->option()->save($accepted);

        // organization_statuses Options

        $submitted = Option::create([
            'name' => 'submitted', 
            'label' => 'Submitted',
            'description' => 'Submitted',
            'type' => 'text',
            'value' => 'Submitted',            
        ]);

        $suspended = Option::create([
            'name' => 'suspended', 
            'label' => 'suspended',
            'description' => 'suspended',
            'type' => 'text',
            'value' => 'suspended',            
        ]);

        $approved = Option::create([
            'name' => 'approved', 
            'label' => 'Approved',
            'description' => 'approved',
            'type' => 'text',
            'value' => 'approved',            
        ]);
        $orgstatusgroup = Optiongroup::where('name','organization_statuses')->first();
        $orgstatusgroup->option()->save($new);
        $orgstatusgroup->option()->save($approved);
        $orgstatusgroup->option()->save($suspended);
        $orgstatusgroup->option()->save($submitted);

        
        // company_status Options
        $orgstatusgroup = Optiongroup::where('name','company_status')->first();
        $sole_trader = Option::create([
            'name' => 'sole_trader_private_individual', 
            'label' => 'Sole Trader/ Private Individual',
            'description' => 'Sole Trader/ Private IndividualSole Trader/ Private Individual',
            'type' => 'text',
            'value' => 'Sole Trader/ Private Individual',            
        ]);
        $general_partnership = Option::create([
            'name' => 'general_partnership', 
            'label' => 'General Partnership',
            'description' => 'General Partnership',
            'type' => 'text',
            'value' => 'General Partnership',            
        ]);
        $limited_liability = Option::create([
            'name' => 'limited_liability_company_partnership', 
            'label' => 'Limited Liability Company / Partnership',
            'description' => 'Limited Liability Company / Partnership',
            'type' => 'text',
            'value' => 'Limited Liability Company / Partnership',            
        ]);
        $private_limited_company = Option::create([
            'name' => 'private_limited_company', 
            'label' => 'Private Limited Company',
            'description' => 'Private Limited Company',
            'type' => 'text',
            'value' => 'Private Limited Company',            
        ]);
        $public_limited_company = Option::create([
            'name' => 'public_limited_company', 
            'label' => 'Public Limited Company',
            'description' => 'Public Limited Company',
            'type' => 'text',
            'value' => 'Public Limited Company',            
        ]);
        $joint_stock_limited_company = Option::create([
            'name' => 'joint_stock_limited_company', 
            'label' => 'Joint Stock Limited Company',
            'description' => 'Joint Stock Limited Company',
            'type' => 'text',
            'value' => 'Joint Stock Limited Company',            
        ]);
        $other = Option::create([
            'name' => 'other', 
            'label' => 'Other',
            'description' => 'Other',
            'type' => 'text',
            'value' => 'Other',            
        ]);
        $orgstatusgroup->option()->save($sole_trader);
        $orgstatusgroup->option()->save($general_partnership);
        $orgstatusgroup->option()->save($limited_liability);
        $orgstatusgroup->option()->save($private_limited_company);
        $orgstatusgroup->option()->save($public_limited_company);
        $orgstatusgroup->option()->save($joint_stock_limited_company);
        $orgstatusgroup->option()->save($other);


        // nature_of_the_business Options 
        $orgstatusgroup = Optiongroup::where('name','nature_of_the_business')->first();
        $national_oil_company = Option::create([
            'name' => 'national_oil_company', 
            'label' => 'National Oil Company (NOC)',
            'description' => 'National Oil Company (NOC)',
            'type' => 'text',
            'value' => 'National Oil Company (NOC)',            
        ]);
        $vertically_integrated_oil_company = Option::create([
            'name' => 'vertically_integrated_oil_company', 
            'label' => 'Vertically Integrated Oil Company',
            'description' => 'Vertically Integrated Oil Company',
            'type' => 'text',
            'value' => 'Vertically Integrated Oil Company',            
        ]);
        $commodities_trading_company = Option::create([
            'name' => 'commodities_trading_company', 
            'label' => 'Commodities Trading Company',
            'description' => 'Commodities Trading Company',
            'type' => 'text',
            'value' => 'Commodities Trading Company',            
        ]);
        $merchant_refining_company = Option::create([
            'name' => 'merchant_refining_company', 
            'label' => 'Merchant Refining Company',
            'description' => 'Merchant Refining Company',
            'type' => 'text',
            'value' => 'Merchant Refining Company',            
        ]);
        $distribution_marketing_company = Option::create([
            'name' => 'distribution_marketing_company', 
            'label' => 'Distribution / Marketing Company',
            'description' => 'Distribution / Marketing Company',
            'type' => 'text',
            'value' => 'Distribution / Marketing Company',            
        ]);
        $brokerage_company = Option::create([
            'name' => 'brokerage_company', 
            'label' => 'Brokerage Company',
            'description' => 'Brokerage Company',
            'type' => 'text',
            'value' => 'Brokerage Company',            
        ]);
        $shipping_company_agent = Option::create([
            'name' => 'shipping_company_agent', 
            'label' => 'Shipping Company / Agent',
            'description' => 'Shipping Company / Agent',
            'type' => 'text',
            'value' => 'Shipping Company / Agent',            
        ]);
        $financial_institution = Option::create([
            'name' => 'financial_institution', 
            'label' => 'Financial Institution',
            'description' => 'Financial Institution',
            'type' => 'text',
            'value' => 'Financial Institution',            
        ]);
        $orgstatusgroup->option()->save($national_oil_company);
        $orgstatusgroup->option()->save($vertically_integrated_oil_company);
        $orgstatusgroup->option()->save($commodities_trading_company);
        $orgstatusgroup->option()->save($merchant_refining_company);
        $orgstatusgroup->option()->save($distribution_marketing_company);
        $orgstatusgroup->option()->save($brokerage_company);
        $orgstatusgroup->option()->save($shipping_company_agent);
        $orgstatusgroup->option()->save($financial_institution);
        
        // shareholders_type Options
        $orgstatusgroup = Optiongroup::where('name','shareholders_type')->first();
        $beneficial_owner = Option::create([
            'name' => 'beneficial_owner', 
            'label' => 'Beneficial Owner',
            'description' => 'Beneficial Owner',
            'type' => 'text',
            'value' => 'Beneficial Owner',            
        ]);
        $shareholder = Option::create([
            'name' => 'shareholder', 
            'label' => 'Shareholder',
            'description' => 'Shareholder',
            'type' => 'text',
            'value' => 'Shareholder',            
        ]);
        $subsidiaries = Option::create([
            'name' => 'subsidiaries', 
            'label' => 'Subsidiaries',
            'description' => 'Subsidiaries',
            'type' => 'text',
            'value' => 'Subsidiaries',            
        ]);
        $orgstatusgroup->option()->save($beneficial_owner);
        $orgstatusgroup->option()->save($shareholder);
        $orgstatusgroup->option()->save($subsidiaries);

        // business_function Options
        $orgstatusgroup = Optiongroup::where('name','business_function')->first();
        $business_function = Option::create([
            'name' => 'business_function', 
            'label' => 'BUSINESS FUNCTION',
            'description' => 'BUSINESS FUNCTION',
            'type' => 'text',
            'value' => 'BUSINESS FUNCTION',            
        ]);
        $orgstatusgroup->option()->save($business_function);


        // personnel_type Options
        $orgstatusgroup = Optiongroup::where('name','personnel_type')->first();
        $director = Option::create([
            'name' => 'director', 
            'label' => 'Director',
            'description' => 'Director',
            'type' => 'text',
            'value' => 'Director',            
        ]);
        $executive = Option::create([
            'name' => 'executive', 
            'label' => 'Executive',
            'description' => 'Executive',
            'type' => 'text',
            'value' => 'Executive',            
        ]);        
        $signatories = Option::create([
            'name' => 'signatories', 
            'label' => 'Signatories',
            'description' => 'Signatories',
            'type' => 'text',
            'value' => 'Signatories',            
        ]);
        $orgstatusgroup->option()->save($director);
        $orgstatusgroup->option()->save($executive);
        $orgstatusgroup->option()->save($signatories);

        // stages_type Options
        $orgstatusgroup = Optiongroup::where('name','stages_type')->first();
        $offer_created = Option::create([
            'name' => 'offer_created', 
            'label' => 'Offer Created',
            'description' => 'Offer Created',
            'type' => 'text',
            'value' => 'Offer Created',            
        ]);
        $offer_sent = Option::create([
            'name' => 'offer_sent', 
            'label' => 'Offer Sent',
            'description' => 'Offer Sent',
            'type' => 'text',
            'value' => 'Offer Sent',            
        ]);
        $offer_recap = Option::create([
            'name' => 'offer_recap', 
            'label' => 'Offer Recap',
            'description' => 'Offer Recap',
            'type' => 'text',
            'value' => 'Offer Recap',            
        ]);
        $orgstatusgroup->option()->save($offer_created);
        $orgstatusgroup->option()->save($offer_sent);
        $orgstatusgroup->option()->save($offer_recap);

        $payment_option_group = Optiongroup::create([
            'name' => 'payment_options',
            'label' => 'Payment options',
            'description' => 'Payment options',
            'display_order' => '0',   
        ]);



        $payment_option1 = Option::create([
            'name' => 'net_30', 
            'label' => '30 days after delivery',
            'description' => '30 days after delivery',
            'type' => 'text',
            'value' => '30 days after delivery',            
        ]);

        $payment_option2 = Option::create([
            'name' => 'payment_on_delivery', 
            'label' => 'Payment on delivery',
            'description' => 'Payment on delivery',
            'type' => 'text',
            'value' => 'Payment on delivery',            
        ]);

        $payment_option_group->option()->save($payment_option1);
        $payment_option_group->option()->save($payment_option2);


    }
}

