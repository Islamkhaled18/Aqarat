<?php

use Illuminate\Database\Seeder;

class SitesettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Sitesetting::create([
            'site_name'=> "Building Construction",
            'contact_email'=>'companymial@gmail.com',
            'contact_number'=>'+9719586485463',
            'contact_number_second'=>'123',
            'company_address'=>'17 Gadda st. S.A',
            'website_image'=> asset('uploads/website_images/slider_bg.png'),
            'company_facebook_account'=> 'Facebook',
            'company_instagram_account'=>'Instagram',
            'company_description'=> 'Buildings Company that has more than 15 years',
            'company_key_words' =>'Building Company',
            'company_map'=> 'https://goo.gl/maps/5avoQZdS2Q4xBpLj9',
        ]);
    }
}
