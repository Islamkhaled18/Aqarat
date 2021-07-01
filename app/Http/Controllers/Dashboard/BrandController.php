<?php

namespace App\Http\Controllers\Dashboard;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $brands = Brand::all();
        return view('dashboard.brands.index',compact('brands'));
    }//end of index


    public function create()
    {
        $brands = Brand::all();

        return view('dashboard.brands.create',compact('brands'));
    }//end of create


    public function store(Request $request){
        $request->validate([
            'first_brand_image'=> 'image',
            'second_brand_image'=> 'image',
            'third_brand_image'=> 'image',
            'fourth_brand_image'=> 'image',
        ]);
        $brands = Brand::first();

        if ($request->hasFile('first_brand_image')){
            $imageName = $request->first_brand_image->getClientOriginalName();
            $imageExt  = $request->first_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->first_brand_image->move('uploads/website_images' , $imageName);
            $first_brand_image_value = $path ;
        }else{
            $first_brand_image_value = "$brands->first_brand_image";
        }

        if ($request->hasFile('second_brand_image')){
            $imageName = $request->second_brand_image->getClientOriginalName();
            $imageExt  = $request->second_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->second_brand_image->move('uploads/website_images' , $imageName);
            $second_brand_image_value = $path ;
        }else{
            $second_brand_image_value = $brands->second_brand_image;
        }

        if ($request->hasFile('third_brand_image')){
            $imageName = $request->third_brand_image->getClientOriginalName();
            $imageExt  = $request->third_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->third_brand_image->move('uploads/website_images' , $imageName);
            $third_brand_image_value = $path ;
        }else{
            $third_brand_image_value = $brands->third_brand_image;
        }

        if ($request->hasFile('fourth_brand_image')){
            $imageName = $request->fourth_brand_image->getClientOriginalName();
            $imageExt  = $request->fourth_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->fourth_brand_image->move('uploads/website_images' , $imageName);
            $fourth_brand_image_value = $path ;
        }else{
            $fourth_brand_image_value = $brands->fourth_brand_image;
        }


        Brand::create([
            'first_brand_image'  => $first_brand_image_value,
            'second_brand_image' => $second_brand_image_value,
            'third_brand_image'  => $third_brand_image_value,
            'fourth_brand_image' => $fourth_brand_image_value,
        ]);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.brands.index');

    }//end of store

    public function edit(){
        $brands = Brand::all();
        return view('dashboard.brands.edit' , compact('brands'));

    }//end of edit


    public function update(Request  $request , $id){
        $request->validate([
            'first_brand_image'=> 'image',
            'second_brand_image'=> 'image',
            'third_brand_image'=> 'image',
            'fourth_brand_image'=> 'image',
        ]);

        $brands = Brand::first();

        if ($request->hasFile('first_brand_image')){
            $imageName = $request->first_brand_image->getClientOriginalName();
            $imageExt  = $request->first_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->first_brand_image->move('uploads/website_images' , $imageName);
            $first_brand_image_value = $path ;
        }else{
            $first_brand_image_value = $brands->first_brand_image;
        }

        if ($request->hasFile('second_brand_image')){
            $imageName = $request->second_brand_image->getClientOriginalName();
            $imageExt  = $request->second_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->second_brand_image->move('uploads/website_images' , $imageName);
            $second_brand_image_value = $path ;
        }else{
            $second_brand_image_value = $brands->second_brand_image;
        }

        if ($request->hasFile('third_brand_image')){
            $imageName = $request->third_brand_image->getClientOriginalName();
            $imageExt  = $request->third_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->third_brand_image->move('uploads/website_images' , $imageName);
            $third_brand_image_value = $path ;
        }else{
            $third_brand_image_value = $brands->third_brand_image;
        }

        if ($request->hasFile('fourth_brand_image')){
            $imageName = $request->fourth_brand_image->getClientOriginalName();
            $imageExt  = $request->fourth_brand_image->getClientOriginalExtension();
            $newName = uniqid("",true) . '.' . $imageExt;
            $path = $request->fourth_brand_image->move('uploads/website_images' , $imageName);
            $fourth_brand_image_value = $path ;
        }else{
            $fourth_brand_image_value = $brands->forth_brand_image;
        }

        if($brands) {
            $brands->update([
                'first_brand_image'  => $first_brand_image_value,
                'second_brand_image' => $second_brand_image_value,
                'third_brand_image'  => $third_brand_image_value,
                'fourth_brand_image' => $fourth_brand_image_value,
            ]);
        } else {
            Brand::create($request->all());
        }
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.brands.index' , compact('brands'));
    }//end of update

    public function destroy(Request $request ,Brand $brand)
    {

        $brand = Brand::first();
        $brand->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.brands.index');
    }
}
