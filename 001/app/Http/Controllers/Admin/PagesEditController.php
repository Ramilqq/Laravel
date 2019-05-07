<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pages;
use Validator;
use File;

class PagesEditController extends Controller
{
    //
    public function execute (Pages $page, Request $request){
	   	
	   	if($request->isMethod('delete')){	
			$page->delete();
			$file = $page->images;
			File::delete(public_path().'/assets/img/'. $file);
			return redirect('admin')->with('status','Страница удалена');
		}
	   	
    	if($request->isMethod('post')){
			    
			    $input = $request->except('_token');
			    $validator = Validator::make($input,[
					    'name' => 'required|max:100',
					    'alias' => 'required|max:100|unique:pages,alias,'.$input['id'],
					    'text' => 'required',
												    ]);
			    if($validator->fails()){
			    	return(redirect()->route('pagesedit',['page'=>$input['id']])->withErrors($validator));					
				}
				if($request->hasFile('images')){
					$file = $request->file('images');
					$input['images'] = $file->getClientOriginalName();
					$type = strrchr($input['images'],'.');
					$input['images'] = $input['alias'].$type;
					$file->move(public_path().'/assets/img',$input['alias'].$type);
					//$input['images'] = $file->getClientOriginalName();
				}else{
				   	$input['images'] = $input['imagesOld'];
			   }
			   unset ($input['imagesOld']);
			   
			   //$page->fill($input);
			   
               $page->id = $input['id'];
			   $page->name = $input['name'];
			   $page->alias = $input['alias'];
			   $page->text = $input['text'];
			   $page->images = $input['images'];
			   
			   
			   if($page->update()){
				    return redirect('admin')->with('status','Изменения вступили в силу');
			   }
			   
		   }
		   
	   	
	   	
	   	//$page = Pages::find($id);
	   	$old = $page->toArray();
	   	if(view()->exists('admin.pagesEdit')){
	   		$data =[
			   		'title'=>'Редактирование '.$old['name'],
			   		'data' => $old,
			   		];
	   		return(view('admin.pagesEdit', $data));
		    
		   }
	   abort(404);
		   
   } 
}
