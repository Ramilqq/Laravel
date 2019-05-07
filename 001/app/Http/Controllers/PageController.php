<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pages;

class PageController extends Controller
{
    //
    function execute ($id){
   		if (!$id):
	   		abort(404);
   		elseif(view()->exists('site.page')):
	   		$page = Pages::where('id',$id)->first();
	   		$data = ['pagesR' => $page,];
	   		return view('site.page',$data);
   		else:
	   		abort(404);
   		endif;
   }
}
