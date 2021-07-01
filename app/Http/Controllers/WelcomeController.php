<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
//    public function frontproject()
//    {
//        $projects = Project::paginate(4);
//        $categories = Category::all();
//        $all_projects = Project::all();
//        return view('welcome',compact('projects','categories','all_projects'));
//    }//welcome page
//
//    public function show_productproject($id)
//    {
//        $projects = Project::paginate(4);
//        $all_projects = Project::where('category_id',$id)->get();
//        $categories = Category::all();
//
//        return view('welcome',compact('projects','categories','all_projects'));
//    }//welcome page


    public function searchprojects(Request $request)
    {


        $projects = Project::where('client_name', 'like','%' . $request->search . '%' )
                    ->orwhere('location', 'like','%' . $request->search . '%' )
                    ->orwhere('start_date', 'like','%' . $request->search . '%' )
                    ->orwhere('cost', 'like','%' . $request->search . '%' )
                    ->orwhere('details', 'like','%' . $request->search . '%' )
                    ->orwhereHas('category',function ($query) use ($request){
                        $query->where('category_name', 'like','%' . $request->search . '%' );

                    })->latest()->get();

        if ($projects !== ''){
            return view('website.projects.projects',compact('projects'));
        }else{
            return redirect()->back();
        }


    }
}
