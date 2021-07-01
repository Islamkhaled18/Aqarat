<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Servicesetting::create([
            'constructions_explain'=>[
                'ar'=>'العمل الناجح هو اساس اي عمل للوصول الى ما تريد',
                'en'=>'working hard',
                ],
            'interiordesign_explain'=>[
                'ar'=>'العمل الناجح هو اساس اي عمل للوصول الى ما تريد',
                'en'=>'working hard',
            ],
            'roads_explain'=>[
                'ar'=>'العمل الناجح هو اساس اي عمل للوصول الى ما تريد',
                'en'=>'working hard',
            ],
            'infrastructures_explain'=>[
                'ar'=>'العمل الناجح هو اساس اي عمل للوصول الى ما تريد',
                'en'=>'working hard',
            ],
        'service_image'=>asset('uploads/website_images/about_img.png'),
        ]);
    }
}
