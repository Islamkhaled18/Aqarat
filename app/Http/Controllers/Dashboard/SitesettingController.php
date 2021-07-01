<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Sitesetting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SitesettingController extends Controller
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

        $sitesettings = Sitesetting::first();

        return view('dashboard.sitesettings.sitesettings',compact('sitesettings'));


    }//end of index


    public function Update(Request $request , Sitesetting $sitesettings){
        $request->validate([
            'site_name'=> "required",
            'contact_email'=>'required',
            'contact_number'=>'required',
            'company_address'=>'required',
            'website_image' => 'image',
            'company_facebook_account'=> 'required',
            'company_instagram_account'=>'required',
            'company_description'=> 'required',
            'company_key_words' =>'required',
        ]); //validation

        $sitesettings = Sitesetting::first();

        if ($request->hasFile('website_image')){
            $imageName = $request->website_image->getClientOriginalName();
            $imageExt = $request->website_image->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->website_image->move('uploads/website_images', $imageName);
            $website_image = $path;
        }else{
            $website_image = '';
        }//end of save image

        if($sitesettings) {
            $sitesettings->update([
                'website_image'            =>$website_image ,
                'site_name'                => $request->site_name,
                'contact_email'            =>$request->contact_email,
                'contact_number'           =>$request->contact_number,
                'contact_number_second'    =>$request->contact_number_second,
                'company_address'          =>$request->company_address,
                'company_facebook_account' =>$request->company_facebook_account,
                'company_instagram_account'=>$request->company_instagram_account,
                'company_description'      =>$request->company_description,
                'company_key_words'        =>$request->company_key_words,
                'company_map'              =>$request->company_map ,
            ]);
        } else {
            Sitesetting::create($request->all());
        }

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();

    }//end of update
}
