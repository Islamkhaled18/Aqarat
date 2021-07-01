<?php

namespace App\Http\Controllers\Dashboard;

use App\Aboutus_setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutussettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // permission -> create , update , create , delete
        $this->middleware(['permission:site_read'])->only('sitesettings');
        $this->middleware(['permission:site_update'])->only('sitesettings');
    }

    public function index(Request $request)
    {
        $aboutussettings = Aboutus_setting::first();
        return view('dashboard.sitesettings.aboutussettings', compact('aboutussettings'));
    }//end of index

    public function Update(Request $request)
    {

        $aboutussettings = Aboutus_setting::first();

        if ($request->hasFile('page_main_image')){
            $imageName = $request->page_main_image->getClientOriginalName();
            $imageExt = $request->page_main_image->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->page_main_image->move('uploads/website_images', $imageName);
            $page_main_image_value = $path;
        }else{
            $page_main_image_value = '';
        }//end of save image
        //

        if ($request->hasFile('page_quote_image')){
            $imageName = $request->page_quote_image->getClientOriginalName();
            $imageExt = $request->page_quote_image->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->page_quote_image->move('uploads/website_images', $imageName);
            $page_quote_image_value = $path;
        }else{
            $page_quote_image_value = '';
        }//end of save image

        if ($request->hasFile('page_container_image')){
            $imageName = $request->page_container_image->getClientOriginalName();
            $imageExt = $request->page_container_image->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->page_container_image->move('uploads/website_images', $imageName);
            $page_container_image_value = $path;
        }else{
            $page_container_image_value = '';
        }//end of save image


        if ($aboutussettings){
            Aboutus_setting::where('id',1)->update([
                'aboutus_headertext'      => [ 'en'=>$request->aboutus_headertext_en    ,'ar'=>$request->aboutus_headertext_ar ],
                'aboutus_paragraphtext'   => [ 'en'=>$request->aboutus_paragraphtext_en , 'ar'=>$request->aboutus_paragraphtext_ar ],
                'number_experience'       =>         $request->number_experience,
                'quote_headertaxt'        => [ 'en'=>$request->quote_headertaxt_en      ,'ar'=>$request->quote_headertaxt_ar ],
                'quote_paragraphtext'     => [ 'en'=>$request->quote_paragraphtext_en   ,'ar'=>$request->quote_paragraphtext_ar ],
                'reason_one'              => [ 'en'=>$request->reason_one_en            ,'ar'=>$request->reason_one_ar ],
                'explain_reason_one'      => [ 'en'=>$request->explain_reason_one_en    ,'ar'=>$request->explain_reason_one_ar ],
                'reason_two'              => [ 'en'=>$request->reason_two_en            ,'ar'=>$request->reason_two_ar ],
                'explain_reason_two'      => [ 'en'=>$request->explain_reason_two_en    ,'ar'=>$request->explain_reason_two_ar ],
                'reason_three'            => [ 'en'=>$request->reason_three_en          ,'ar'=>$request->reason_three_ar ],
                'explain_reason_three'    => [ 'en'=>$request->explain_reason_three_en  ,'ar'=>$request->explain_reason_three_ar ],
                'page_main_image'         => $page_main_image_value,
                'page_quote_image'        => $page_quote_image_value,
                'page_container_image'    => $page_container_image_value,

            ]);
        }

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update


}//end of controller
