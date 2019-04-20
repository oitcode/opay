<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* Constructor */
	public function __construct()
	{
		/* Only for authenticated users */
	    $this->middleware('auth');
	}

	/* Dispaly admin panel view. */
	public function adminPanel()
	{
	    return view('admin.admin-panel');
	}
}
