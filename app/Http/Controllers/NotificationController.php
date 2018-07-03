<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class NotificationController extends Controller
{
   public function notification()
    {
        
		session()->put('error','Item Error.');
		

        return view('notification-check');
    }
	public function ajax()
    {
        return view('Ajaxform');
    }
	public function check(Request $request)
    {
      

   echo $fname = $_GET['fname'];						//Way of receiving AJAX Data
	echo "<br>";
	echo $lname = $_GET['lname'];

    //Now instead of echoing the variable you can write Insert Query here

    
        $insert = DB::insert('insert into usr_dtls (first_name, last_name, username, email,password ) values (?, ?, ?, ?, ?)', [$data['first_name'], $data['last_name'], $data['user_name'], $data['uemail'], $data['user_pass1']]);

        

        

        }	
    


	

    
}
