<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

        // permission -> create , update , create , delete

        $this->middleware(['permission:users_read'])->only('index');
        $this->middleware(['permission:users_create'])->only('create');
        $this->middleware(['permission:users_update'])->only('edit');
        $this->middleware(['permission:users_delete'])->only('destroy');
    }

    public function index(Request $request)
    {

        $users = User::whereRoleIs('admin')->when($request->search, function ($query) use ($request){

            return $query->where('first_name', 'like','%' . $request->search . '%' )
            ->orwhere('last_name', 'like','%' . $request->search . '%' );

        })->paginate(2);

        return view('dashboard.users.index',compact('users'));

    }//end of index

    public function create()
    {
        return view('dashboard.users.create');

    }//end of create

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'image' => 'image',
            'password' => 'required|confirmed',
            'permissions' => 'required|min:1'

        ]);//validation

        $request_data = $request->except(['password', 'password_confirmation', 'permissions','image']);
        $request_data['password'] = bcrypt($request->password);

        if($request->image){
            Image::make($request->image)->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }

        $user = User::create($request_data);
        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.users.index');

    }//end of store

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));

    }//end of edit

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image'=>'image',
            'email' => ['required', Rule::unique('users')->ignore($user->id),],
            'permissions' => 'required|min:1'

        ]); //validation

        $request_data = $request->except(['permissions' , 'image']);
        $user->update($request_data);

        if ($request->image) {

            if ($user->image != 'default.jpeg') {

                Storage::disk('public_uploads')->delete('/user_images/' . $user->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $user->syncPermissions($request->permissions,[]);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.users.index');

    }//end of update

    public function destroy(User $user)
    {

        if($user->image != 'default.jpeg'){
            storage::disk('public_uploads')->delete('/user_images/' . $user->image);
        }

        $user->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');
    }//end of destroy

}//end of controller
