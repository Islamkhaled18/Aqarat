<?php

namespace App\Http\Controllers\Dashboard;

use App\Contactus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactusController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contactus::when($request->search, function ($query) use ($request){

            return $query->where('sender_name', 'like','%' . $request->search . '%' )
                ->orwhere('sender_email', 'like','%' . $request->search . '%' );

        })->paginate(4);
        return view ('dashboard.contactus.index',compact('contacts'));

    }//end of index


    public function store(Request $request){

        $request->validate([
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'sender_message' => 'required|min:5',
        ]);//validation

        Contactus::create($request->all());
        session()->flash('success', __('site.sent_successfully'));
        return redirect()->back();


    }//end of store messages that send from user's website un database

    public function show($id)
    {
        $contactus = Contactus::findOrFail($id);
        $contactus->view = 1;
        $contactus->save();
        return view('dashboard.contactus.showMessage' ,compact('contactus' , 'id'));
    }//end of show message



    public function destroy($id , Contactus $contactus){
        $contactus->find($id)->delete();
        return Redirect::back()->withFlashMessage('تم الحذف بنجاح');
    }//end of delete messages


}//end of controller
