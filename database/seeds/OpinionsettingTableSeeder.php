<?php

use Illuminate\Database\Seeder;

class OpinionsettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Opinionsetting::create([
            'customer_one_name'=> 'اسلام خالد',
            'customer_one_job'=> 'محاسب',
            'customer_one_opinion'=> 'خدمه ممتازه',
            'customer_two_name'=> 'حازم خالد',
            'customer_two_job'=> 'مهندس',
            'customer_two_opinion'=> 'شركه ممتازه',
        ]);
    }
}
