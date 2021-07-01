<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Constructionsetting;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ConstructionsettingController extends Controller
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
        $constructionsettings = Constructionsetting::first();
        return view('dashboard.sitesettings.constuctionsettings', compact('constructionsettings'));
    }//end of index


    public function Update(Request $request , Constructionsetting $constructionsettings)
    {
        //     $request->validate([
//            'explain_quote_ar'=>'required',
//            'explain_quote_en'=>'required',
//            'construction_image'=>'required',
//            'infrastructure_image'=>'required',
//            'road_image'=>'required',
//            'interiordesign_image'=>'required',
//            'feature_one_ar'=>'required',
//            'feature_one_en'=>'required',
//            'feature_two_ar'=>'required',
//            'feature_two_en'=>'required',
//            'feature_three_ar'=>'required',
//            'feature_three_en'=>'required',
//            'feature_four_ar'=>'required',
//            'feature_four_en'=>'required',
//        ]);

        $constructionsettings = Constructionsetting::first();

        if ($request->hasFile('construction_image')){


                $imageName = $request->construction_image->getClientOriginalName();
                $imageExt  = $request->construction_image->getClientOriginalExtension();
                $newName = uniqid("",true) . '.' . $imageExt;
                $path = $request->construction_image->move('uploads/website_images' , $imageName);
                $construction_image_value = $path ;
        }else{
            $construction_image_value = $constructionsettings->construction_image;

        }
        if ($request->hasFile('infrastructure_image')){
            $imageName = $request->infrastructure_image->getClientOriginalName();
            $imageExt  = $request->infrastructure_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->infrastructure_image->move('uploads/website_images' , $imageName);
            $infrastructure_image_value = $path ;
        }else{
            $infrastructure_image_value =$constructionsettings->infrastructure_image ;

        }
        if ($request->hasFile('road_image')){
            $imageName = $request->road_image->getClientOriginalName();
            $imageExt  = $request->road_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->road_image->move('uploads/website_images' , $imageName);
            $road_image_value = $path ;
        }else{
            $road_image_value =$constructionsettings->road_image ;

        }
        if ($request->hasFile('interiordesign_image')){
            $imageName = $request->interiordesign_image->getClientOriginalName();
            $imageExt  = $request->interiordesign_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->interiordesign_image->move('uploads/website_images' , $imageName);
            $interiordesign_image_value = $path ;
        }else{
            $interiordesign_image_value = $constructionsettings->interiordesign_image ;

        }

        Constructionsetting::where('id' , 1)->update([
           'explain_quote' => ['en' => $request->explain_quote_en , 'ar' =>$request->explain_quote_ar],
           'feature_one'   => ['en' => $request->feature_one_en ,   'ar' =>$request->feature_one_ar],
           'feature_two'   => ['en' => $request->feature_two_en ,   'ar' =>$request->feature_two_ar],
           'feature_three' => ['en' => $request->feature_three_en , 'ar' =>$request->feature_three_ar],
           'feature_four'  => ['en' => $request->feature_four_en ,  'ar' =>$request->feature_four_ar],

           'construction_image'  => $construction_image_value,
            'infrastructure_image'  => $infrastructure_image_value,
            'road_image'  => $road_image_value,
            'interiordesign_image'  => $interiordesign_image_value,

        ]);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update


    public function frontcon()
    {
        $projects = Project::paginate(4);
        $categories = Category::all();
        $all_projects = Project::all();
        return view('website.constructions.constructions',compact('projects','categories','all_projects'));
    }//project page

    public function show_productcon($id)
    {
        $projects = Project::paginate(10);
        $all_projects = Project::where('category_id',$id)->get();
        $categories = Category::all();

        return view('website.constructions.constructions',compact('projects','categories','all_projects'));
    }//project page

}//end of controller
