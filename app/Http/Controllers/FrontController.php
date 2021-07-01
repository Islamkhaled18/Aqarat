<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front()
    {
        $projects = Project::paginate(10);
        $categories = Category::all();
        $all_projects = Project::all();

        return view('welcome',compact('projects','categories','all_projects'));
    }//project page

    public function show_product($id)
    {
        $projects = Project::paginate(10);
        $all_projects = Project::where('category_id',$id)->get();
        $categories = Category::all();

        return view('welcome',compact('projects','categories','all_projects'));
    }//project page

}
