<?php

namespace App\Providers;

use App\Aboutus_setting;
use App\Brand;
use App\Category;
use App\Constructionsetting;
use App\Contactus;
use App\Opinionsetting;
use App\Project;
use App\Servicesetting;
use App\Sitesetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $siteSettings = Sitesetting::first();
        Contactus::first();
        $aboutussettings = Aboutus_setting::first();
        $constructionsettings = Constructionsetting::first();
        $servicesettings = Servicesetting::first();
        $opinionsettings = Opinionsetting::first();
        $brands = Brand::first();
//        dd($brands);

        /////////////////////////////////////////////////////////////////////////////////////////////////////////


        //اعدادات رئييسية تستخدم في الموقع
        view()->share('website_image'            , asset($siteSettings->website_image));
        view()->share('company_address'          , $siteSettings->company_address);
        view()->share('contact_number'           , $siteSettings->contact_number);
        view()->share('contact_number_second'    , $siteSettings->contact_number_second);
        view()->share('contact_email'            , $siteSettings->contact_email);
        view()->share('contact_email'            , $siteSettings->contact_email);
        view()->share('company_facebook_account' , $siteSettings->company_facebook_account);
        view()->share('company_instagram_account', $siteSettings->company_instagram_account);
        view()->share('latitute'                 , $siteSettings->company_description);
        view()->share('longitute'                , $siteSettings->company_key_words);
        view()->share('company_map'              , $siteSettings->company_map);

        /////////////////////////////////////////////////////////////////////////////////////////////////////////


        //اعدادات صفحة من نحن
        view()->share('aboutus_headertext_ar'   , $aboutussettings->getTranslation('aboutus_headertext', 'ar'));
        view()->share('aboutus_headertext_en'   , $aboutussettings->getTranslation('aboutus_headertext', 'en'));

        view()->share('aboutus_paragraphtext_ar', $aboutussettings->getTranslation('aboutus_paragraphtext', 'ar'));
        view()->share('aboutus_paragraphtext_en', $aboutussettings->getTranslation('aboutus_paragraphtext', 'en'));

        view()->share('page_main_image'        , asset( $aboutussettings->page_main_image));
        view()->share('number_experience'      , $aboutussettings->number_experience);
        view()->share('page_quote_image'       , asset('uploads/website_images/' . $aboutussettings->page_quote_image));

        view()->share('quote_headertaxt_ar'    , $aboutussettings->getTranslation('quote_headertaxt', 'ar'));
        view()->share('quote_headertaxt_en'    , $aboutussettings->getTranslation('quote_headertaxt', 'en'));

        view()->share('quote_paragraphtext_ar' , $aboutussettings->getTranslation('quote_paragraphtext', 'ar'));
        view()->share('quote_paragraphtext_en' , $aboutussettings->getTranslation('quote_paragraphtext', 'en'));

        view()->share('page_container_image'   , asset($aboutussettings->page_container_image));
        view()->share('reason_one_ar'          , $aboutussettings->getTranslation('reason_one', 'ar'));
        view()->share('reason_one_en'          , $aboutussettings->getTranslation('reason_one', 'en'));

        view()->share('explain_reason_one_ar'  , $aboutussettings->getTranslation('explain_reason_one', 'ar'));
        view()->share('explain_reason_one_en'  , $aboutussettings->getTranslation('explain_reason_one', 'en'));

        view()->share('reason_two_ar'          , $aboutussettings->getTranslation('reason_two', 'ar'));
        view()->share('reason_two_en'          , $aboutussettings->getTranslation('reason_two', 'ar'));

        view()->share('explain_reason_two_ar'  , $aboutussettings->getTranslation('explain_reason_two', 'ar'));
        view()->share('explain_reason_two_en'  , $aboutussettings->getTranslation('explain_reason_two', 'en'));

        view()->share('reason_three_ar'        , $aboutussettings->getTranslation('reason_three', 'ar'));
        view()->share('reason_three_en'        , $aboutussettings->getTranslation('reason_three', 'ar'));

        view()->share('explain_reason_three_ar', $aboutussettings->getTranslation('explain_reason_three', 'ar'));
        view()->share('explain_reason_three_en', $aboutussettings->getTranslation('explain_reason_three', 'en'));

        /////////////////////////////////////////////////////////////////////////////////////////////////////////

        //اعدادات صفحة الانشاءات
        view()->share('explain_quote_ar'    , $constructionsettings->getTranslation('explain_quote', 'ar'));
        view()->share('explain_quote_en'    , $constructionsettings->getTranslation('explain_quote', 'en'));
        view()->share('feature_one_en'      , $constructionsettings->getTranslation('feature_one', 'en'));
        view()->share('feature_one_ar'      , $constructionsettings->getTranslation('feature_one', 'ar'));
        view()->share('feature_two_en'      , $constructionsettings->getTranslation('feature_two', 'en'));
        view()->share('feature_two_ar'      , $constructionsettings->getTranslation('feature_two', 'ar'));
        view()->share('feature_three_en'    , $constructionsettings->getTranslation('feature_three', 'en'));
        view()->share('feature_three_ar'    , $constructionsettings->getTranslation('feature_three', 'ar'));
        view()->share('feature_four_en'     , $constructionsettings->getTranslation('feature_four', 'en'));
        view()->share('feature_four_ar'     , $constructionsettings->getTranslation('feature_four', 'ar'));
        view()->share('construction_image'  , asset($constructionsettings->construction_image));
        view()->share('infrastructure_image', asset( $constructionsettings->infrastructure_image));
        view()->share('road_image'          , asset($constructionsettings->road_image));
        view()->share('interiordesign_image', asset( $constructionsettings->interiordesign_image));

        /////////////////////////////////////////////////////////////////////////////////////////////////////////

        //اعدادات صفحة خدماتنا
        view()->share('constructions_explain_ar'       , $servicesettings->getTranslation('constructions_explain', 'ar'));
        view()->share('constructions_explain_en'       , $servicesettings->getTranslation('constructions_explain', 'en'));
        view()->share('interiordesign_explain_ar'      , $servicesettings->getTranslation('interiordesign_explain', 'ar'));
        view()->share('interiordesign_explain_en'      , $servicesettings->getTranslation('interiordesign_explain', 'en'));
        view()->share('roads_explain_ar'               , $servicesettings->getTranslation('roads_explain', 'ar'));
        view()->share('roads_explain_en'               , $servicesettings->getTranslation('roads_explain', 'en'));
        view()->share('infrastructures_explain_ar'     , $servicesettings->getTranslation('infrastructures_explain', 'ar'));
        view()->share('infrastructures_explain_en'     , $servicesettings->getTranslation('infrastructures_explain', 'en'));
        view()->share('service_image'                  , asset($servicesettings->service_image));
        /////////////////////////////////////////////////////////////////////////////////////////////////////////

        //اعدادات صفحة اراء العملاء
        view()->share('customer_one_name'   , $opinionsettings->customer_one_name);
        view()->share('customer_one_job'    , $opinionsettings->customer_one_job);
        view()->share('customer_one_opinion', $opinionsettings->customer_one_opinion);
        view()->share('customer_two_name'   , $opinionsettings->customer_two_name);
        view()->share('customer_two_job'    , $opinionsettings->customer_two_job);
        view()->share('customer_two_opinion', $opinionsettings->customer_two_opinion);

        /////////////////////////////////////////////////////////////////////////////////////////////////////////

//        صفحة الـ Brands

        view()->share('first_brand_image', asset(   $brands->first_brand_image));
        view()->share('second_brand_image', asset( $brands->second_brand_image));
        view()->share('third_brand_image', asset( $brands->third_brand_image));
        view()->share('fourth_brand_image', asset( $brands->fourth_brand_image));


        View::composer('*', function ($view) {
            $projects = Project::paginate(10);
            $categories = Category::all();
            $all_projects = Project::all();

            $view->with([
                'categories' => $categories,
                'projects' => $projects,
                'all_projects' => $all_projects,

            ]);
        });

    }
}
