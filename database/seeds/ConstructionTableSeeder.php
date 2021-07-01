<?php

use Illuminate\Database\Seeder;

class ConstructionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Constructionsetting::create([
            'explain_quote'=>([
                'ar'=> 'العمل الناجح ',
                'en'=> 'working is the best way to score our goals',
            ]),
            'feature_one'=>([
                'ar'=>'العمل الناجح ',
                'en'=>'working is the best way to score our goals',
            ]),
            'feature_two'=>([
                'ar'=>'العمل الناجح ',
                'en'=>'working is the best way to score our goals',
            ]),
            'feature_three'=>([
                'ar'=>'العمل الناجح ',
                'en'=>'working is the best way to score our goals',
            ]),
            'feature_four'=>([
                'ar'=>'العمل الناجح ',
                'en'=>'working is the best way to score our goals',
            ]),
            'construction_image'=>asset('uploads/website_images/about_img.png'),
            'infrastructure_image'=>asset('uploads/website_images/about_img.png'),
            'road_image'=>asset('uploads/website_images/about_img.png'),
            'interiordesign_image'=>asset('uploads/website_images/about_img.png'),
        ]);
    }
}
