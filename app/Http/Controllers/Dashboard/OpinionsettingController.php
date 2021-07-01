<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Opinionsetting;
use Illuminate\Http\Request;

class OpinionsettingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }//authentication

    public function index(Request $request){
        $opinionsettings = Opinionsetting::first();

        return view('dashboard.sitesettings.opinionsettings' ,compact('opinionsettings'));
    }//enf of index

    public function update(Request $request , Opinionsetting $opinionsettings){

        $request->validate([
            'customer_one_name'=>'required',
            'customer_one_job'=>'required',
            'customer_one_opinion'=>'required',
            'customer_two_name'=>'required',
            'customer_two_job'=>'required',
            'customer_two_opinion'=>'required',
        ]);//validation

        $opinionsettings = Opinionsetting::first();


        $opinionsettings->customer_one_name    = $request->customer_one_name;
        $opinionsettings->customer_one_job     = $request->customer_one_job;
        $opinionsettings->customer_one_opinion = $request->customer_one_opinion;
        $opinionsettings->customer_two_name    = $request->customer_two_name;
        $opinionsettings->customer_two_job     = $request->customer_two_job;
        $opinionsettings->customer_two_opinion = $request->customer_two_opinion;
        $opinionsettings->save();


        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update

}//end of controller
