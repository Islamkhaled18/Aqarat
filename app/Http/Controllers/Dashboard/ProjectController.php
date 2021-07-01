<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function index(Request $request){

        $projects = Project::when($request->search, function ($query) use ($request){

            return $query->where('client_name', 'like','%' . $request->search . '%' )
                ->orwhere('location', 'like','%' . $request->search . '%' )
                ->orwhere('start_date', 'like','%' . $request->search . '%' )
                ->orwhere('cost', 'like','%' . $request->search . '%' )
                ->orwhere('details', 'like','%' . $request->search . '%' );

        })->paginate(4);
        $categories = Category::all();
        return view('dashboard.projects.index',compact('projects','categories'));
    }

    public function create()
    {
        $projects = Project::all();
        $categories = Category::all();
        return view('dashboard.projects.create',compact('projects','categories'));

    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'client_name_en' => 'required',
            'client_name_ar' => 'required',
            'location_en' => 'required',
            'location_ar' => 'required',
            'start_date_en' => 'required',
            'start_date_ar' => 'required',
            'cost_en' => 'required',
            'cost_ar' => 'required',
            'details_en' => 'required',
            'details_ar' => 'required',
//            'image'     =>'required'
        ]);//validation

        $project = new Project();
        $project->client_name   = ['en' => $request->client_name_en , 'ar' =>$request->client_name_ar];
        $project->location      = ['en' => $request->location_en    , 'ar' =>$request->location_ar];
        $project->start_date    = ['en' => $request->start_date_en  , 'ar' =>$request->start_date_ar];
        $project->cost          = ['en' => $request->cost_en        , 'ar' =>$request->cost_ar];
        $project->details       = ['en' => $request->details_en     , 'ar' =>$request->details_ar];
        $project->category_id   = $request->category_id;
        $project->save();


        //save multiple images
        if ($request->hasFile('project_image')){
            $project_images =[];

            foreach ($request->project_image as $image){
                $imageName = $image->getClientOriginalName();
                $imageExt  = $image->getClientOriginalExtension();
                $newName = uniqid("",true) . '.' . $imageName;
                array_push($project_images, $newName);
                $path = $image->move('uploads/website_images' , $imageName);
                $project_images = $path;
            }

            $project->project_image = $project_images;

            $project->update();
        }

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.singleproject.index');

    }// end of store

    public function edit(Request $request , $id)
    {
        $project = Project::where('id',$id)->first();
        $categories = Category::all();
        return view('dashboard.projects.edit',compact('project','categories'));

    }//end of edit


    public function update(Request $request,$id)
    {
        $project = Project::findOrFail($id);
        $project->update([
            'client_name'   => ['en' => $request->client_name_en , 'ar' =>$request->client_name_ar],
            'location'      => ['en' => $request->location_en    , 'ar' =>$request->location_ar],
            'start_date'    => ['en' => $request->start_date_en  , 'ar' =>$request->start_date_ar],
            'cost'          => ['en' => $request->cost_en        , 'ar' =>$request->cost_ar],
            'details'       => ['en' => $request->details_en     , 'ar' =>$request->details_ar],
            'category_id'   => $request->category_id
        ]);


        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.singleproject.index');

    }//end of update

    public function destroy(Request $request ,Project $project ,$id)
    {

        $project = Project::where('id',$id)->first();
        $project->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.singleproject.index');
    }
    public function front()
    {
        $projects = Project::paginate(10);
        $categories = Category::all();
        $all_projects = Project::all();
        return view('website.projects.projects',compact('projects','categories','all_projects'));
    }//project page

    public function show_product($id)
    {
        $projects = Project::paginate(10);
        $all_projects = Project::where('category_id',$id)->get();
        $categories = Category::all();

        return view('website.projects.projects',compact('projects','categories','all_projects'));
    }//project page






}
