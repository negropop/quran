<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Posts;

class AjaxUploadController extends Controller
{
    /**
    * Show the application ajaxImageUpload.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
      return view('create');
    }
    /**
    * Show the application ajaxImageUploadPost.
    *
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'title' => 'required',
            'reader' => 'required',
            'section' => 'required',
        ]);

        if($validator->passes()){
           
            $input = new Posts;
      
        
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $imageName);
    
            $input->title =  $request->title;
            $input->path =  'upload/' . $imageName;
            $input->duration =  $request->duration;
            $input->reader =  $request->reader;
            $input->section =  $request->section;
            $input->save();
            return Response()->json(["success"=>"Image Upload Successfully"]);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }
}