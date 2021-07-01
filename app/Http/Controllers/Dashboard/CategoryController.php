<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

//        // permission -> create , update , create , delete
//
//        $this->middleware(['permission:users_read'])->only('index');
//        $this->middleware(['permission:users_create'])->only('create');
//        $this->middleware(['permission:users_update'])->only('edit');
//        $this->middleware(['permission:users_delete'])->only('destroy');
    }

    public function index(Request $request)
    {
        $categories = Category::when($request->search, function ($query) use ($request){

            return $query->where('category_name', 'like','%' . $request->search . '%' );

        })->paginate(4);

        return view('dashboard.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('dashboard.categories.create');
    }//end of create


    public function store(Request $request , Category $category)
    {
//        $request->validate([
//            'client_name' => 'required',
//            'client_name_en' => 'required',
//        ]);
//        Category::create($request->all());

        $category = Category::first();
        $category = new Category();



        $category->category_name   = ['en' => $request->category_name_en , 'ar' =>$request->category_name_ar];
        $category->save();



        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.categories.index');

    }//end of store


    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
    }//end of edit


    public function update(Request $request, Category $category)
    {
//        $request->validate([
//            'client_name'=>'required|unique,' . $category->id,
////            'client_name_en'=>'required|unique,' . $category->id,
//        ]);

//        $category->update($request->all());


        $category->update([
            $category->category_name   = ['en' => $request->category_name_en , 'ar' =>$request->category_name_ar],
        ]);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.categories.index');

    }//end of update


    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.categories.index');
    }//end of destroy
}
