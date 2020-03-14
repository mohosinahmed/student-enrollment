<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class AdminController extends Controller
{


    public function adminLogin(Request $request){
        //return view('admin.dashboard');
        
        $email = $request->admin_email;
        $password = md5($request->admin_password);
        
        $result = DB::table('admin_tbl')
        ->where('admin_email', $email)
        ->where('admin_password', $password)
        ->first();
        
        if($result){
           return redirect('dashboard');  
        }else{
            return Redirect::to('admin');
            
        }
    }

    public function adminDashboard(){
        return view('admin.dashboard');        
    }

}
