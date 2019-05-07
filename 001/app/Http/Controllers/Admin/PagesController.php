<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pages;

class PagesController extends Controller
{
    //
    public function execute(){
	   	if(view()->exists('admin.pages')):
		   	$pages = Pages::all();
		   	
		   	$data = [
				   	'title' => 'loock',
				   	'pages' => $pages,
				   	];
		   	return view ('admin.pages', $data);
	   	endif;
	   	abort(404);
   }
}
