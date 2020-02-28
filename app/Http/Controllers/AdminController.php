<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class AdminController extends Controller
{
    public function login_dashboard(Request $request){
        //return view('admin.dashboard');
        
        $email = $request->admin_email;
        $password = $request->admin_password;
        
        $result = DB::table('admin_tbl')
        ->where('admin_email', $email)
        ->where('admin_password', $password)
        ->first();
        
        if($result){
           echo 'wel';
        }else{
            return Redirect::to('/admin');
        }
    }
}
