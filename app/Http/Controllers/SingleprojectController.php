<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;

class SingleprojectController extends Controller
{
    public function frontsingle()
    {
        $projects = Project::paginate(4);
        $categories = Category::all();
        $all_projects = Project::all();
        return view('website.singleproject.singleproject',compact('projects','categories','all_projects'));
    }//project page

    public function show_productsingle($id)
    {
        $projects = Project::paginate(10);
        $all_projects = Project::where('category_id',$id)->get();
        $categories = Category::all();

        return view('website.singleproject.singleproject',compact('projects','categories','all_projects'));
    }//project page



    public function show_singleproject($id)
    {
        $projects     = Project::find($id);
        $singleproject = Project::where('id',$id)->first();
        $categories = Category::all();

        return view('website.singleproject.singleproject',compact('projects','categories','singleproject'));
    }//singleproject page datails
}





















