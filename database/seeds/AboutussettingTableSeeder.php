<?php

use Illuminate\Database\Seeder;

class AboutussettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Aboutus_setting::create([
            'aboutus_headertext' =>[
               'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'aboutus_paragraphtext' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
           'page_main_image'=> asset('uploads/website_images/about_img.png'),
            'number_experience' => '15',
            'page_quote_image' => asset('uploads/website_images/quote.png'),
            'quote_headertaxt'=>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'quote_paragraphtext' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'page_container_image' => asset('uploads/website_images/about_img2.png'),
            'reason_one' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'explain_reason_one' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'reason_two' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'explain_reason_two' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'reason_three' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
            'explain_reason_three' =>[
                'ar'=> 'شركة عقارات هدفها البناء والتعمير',
                'en'=> 'constructions'
            ],
        ]);
    }
}
