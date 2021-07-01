<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Project;
use App\Servicesetting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServicesettingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $servicesettings = Servicesetting::first();
        return view ('dashboard.sitesettings.servicesettings',compact('servicesettings'));
    }

    public function update(Request $request , Servicesetting $servicesettings)
    {
        $request->validate([
//            'constructions_explain_ar'=>'required',
//            'interiordesign_explain'=>'required',
//            'roads_explain'=>'required',
//            'infrastructures_explain'=>'required',
//            'service_image'=>'required',
        ]);

        $servicesettings = Servicesetting::first();

        if ($request->hasFile('service_image')){
            $imageName = $request->service_image->getClientOriginalName();
            $imageExt = $request->service_image->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->service_image->move('uploads/website_images', $imageName);
            $service_image_value = $path;
        }else{
            $service_image_value = $servicesettings->service_image;
        }//end of save image

        Servicesetting::where('id',1)->update([
            'constructions_explain'   => [ 'en'=>$request->constructions_explain_en  ,'ar'=>$request->constructions_explain_ar ],
            'interiordesign_explain'  => [ 'en'=>$request->interiordesign_explain_en , 'ar'=>$request->interiordesign_explain_ar ],
            'roads_explain'           => [ 'en'=>$request->roads_explain_en          ,'ar'=>$request->roads_explain_ar ],
            'infrastructures_explain' => [ 'en'=>$request->infrastructures_explain_en,'ar'=>$request->infrastructures_explain_ar ],
            'service_image'           => $service_image_value,
        ]); //update controller

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update function


    public function frontpro()
    {
        $projects = Project::paginate(10);
        $categories = Category::all();
        $all_projects = Project::all();
        return view('website.service.service',compact('projects','categories','all_projects'));
    }//service page

    public function show_productpro($id)
    {
        $projects = Project::paginate(10);
        $all_projects = Project::where('category_id',$id)->get();
        $categories = Category::all();

        return view('website.service.service',compact('projects','categories','all_projects'));
    }//service page

}//end of controller
