<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Pages;


class PagesAddController extends Controller
{
    //
    public function execute(Request $request) {
    	
    	if($request->isMethod('post')){
    		
    		$input = $request->except('_token');
    		
    		$validator = Validator::make($input,[
		    		'name'=>'required|max:100',
		    		'alias'=>'required|max:100|unique:pages',
		    		'text'=>'required',
									    		]);
    		if($validator->fails()){
				return redirect()->route('pagesadd')->withErrors($validator)->withInput();
			}
			if($request->hasFile('images')){
				$file = $request->file('images');
				$input['images'] = $file->getClientOriginalName();
				$type = strrchr($input['images'],'.');
				$input['images'] = $input['alias'].$type;
				$file->move(public_path().'/assets/img', $input['alias'].$type);
			}
			//
			$page = new Pages();
			$page->fill($input);
			if($page->save()){
				return redirect('admin')->with('status','Страница добавлена');
			}
    		
	}
		
		if(view()->exists('admin.add_page')):
			
			$data = [
					'title' => 'New pages'
					];
		return(view('admin.add_page', $data));
		endif;
		abort(404);
	}
}
