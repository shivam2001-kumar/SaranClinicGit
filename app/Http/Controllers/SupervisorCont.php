<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supervisor;
use DB;
use Session;
class SupervisorCont extends Controller
{
    //
    // supervisor login

    function login($role)
    {
        return view('supervisor.login',['role'=>$role]);
    }
    function  suplogin(Request $req)
    {
        $email=$req->get('Username');
        $pass=$req->get('Password');
        $role=$req->get('role');
    $adarr=array(
        'emailx'=>$email,
        'passx'=>$pass,
        'rolex'=>$role
    );
    $res=DB::select("CALL supervisor(:emailx,:passx,:rolex)",$adarr);
  if($res!=null)
  {
  
                if($role=='101')
                {
                    echo "hello";
                    Session::put(['stemail'=>$email]);
                    return redirect('stockmanager/dashboard');
                    //echo "welcome";
                }
                elseif($role=='102')
                {
                    Session::put(['recemail'=>$email]);
                    return redirect('recptionist/dashboard');
                }


                }
  else{
    return "error";
  }

    }
    function checkrole($email,$role)
    {
        }
}
