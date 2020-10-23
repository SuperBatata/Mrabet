<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //

   

    public function dropzone()
    {
        return view('Form');
    }

    public function store(Request $request)
    { 
        $image = $request->file('file');
   
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
   
        return response()->json(['success'=>$imageName]);
     
    }
}
