<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // لوحة التحكم الخاصه بالموقع

    public function index(){

        return view('dashboard.index');

    }//end of index

}//end of controller
