<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function index()
    {

        return View('invite');

    }
	
	 public function login()
    {

        return View('loginfb');

    }
	
	public function comment()
    {

        return View('commentfb');

    }
	public function embedcomment()
    {

        return View('embedcommentfb');

    }
	

}
?>
