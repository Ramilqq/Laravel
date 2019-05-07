<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pages;
use App\People;
use App\Portfolios;
use App\Services;
use Mail;

class IndexController extends Controller
{
    //
    

    
    function execute(Request $request){
    	

    	if ($request->isMethod('post')):
    	
    	    $messages = [
			    	'required' => 'Поле :attribute обязательно к заполнению',
			    	'email' => 'Поле :attribute должно соответствовать Email адресу',
			    	'text' => 'Поле :attribute обязательно к заполнению',
			    	];
    	
	    	$this->validate($request,[
							    	 'name'=> 'required|max:255',
							    	 'email'=> 'required|email',
							    	 'text'=> 'required|max:255',
							    	 ],$messages);
			$data = $request->all();
			$resault = Mail::send('site.email',['data'=>$data], function($message) use ($data){	
				$mailAdmin=env('MAIL_USERNAME');
				$message->from($data['email'],$data['name']); // от кого
				$message->to($mailAdmin)->subject('Question'); // кому
			});
			if ($resault ==TRUE):
				$site = 'https://mailtrap.io/inboxes/576246/messages/1209119073';
				return redirect()->route('home')->with('status', 'Письмо отправлено');
			elseif($resault == FALSE):
				return redirect()->route('home')->with('status', 'Что-то пошло нетоак');
			endif;			    	 
    	endif;
    	
    $pages = Pages::all()->sortByDesc('id')->first();
    $pagesR = Pages::all()->random();
    $portfolios = Portfolios::get(array('name','filter','images'));
    $portfoliosFilter = Portfolios::distinct()->get(['filter']);
    $services = Services::where('id', '<', 20)->get();
    $people = People::take(3)->get();
    
    
    
   	return view('index', ['pages' => $pages,
   	//return view('welcome', ['pages' => $pages,
   	                      'pagesR' => $pagesR,
   	                      'portfolios' => $portfolios,
   	                      'portfoliosFilter' => $portfoliosFilter,
   	                      'services' => $services,
   	                      'people' => $people,
   	                      ]);
   }
}