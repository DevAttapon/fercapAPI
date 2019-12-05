<?php

namespace App\Http\Controllers;
use App\PublicationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PublicationsController extends Controller
{
   
    public function index()
    {
       $pub = PublicationModel::All();
       return response()->json([
           "masssage" => "success",
           "data" => $pub
       ]);
    }

   
    public function store(Request $request)
    {
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
        }
        $res =   PublicationModel::create([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $file
            ]);
            return response()->json([
                "message" => "success"
            ]);
    }

   
    public function show($id)
    {
        $pub = PublicationModel::Find($id);
        return response()->json([
            "message" => "success",
            "data" => $pub
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $pub = PublicationModel::find($id);
      
        if($request->file('file')!=''){
            Storage::delete($event->file);
            $file=Storage::putFile('', $request->file('file'));
        }else{
            $file = $pub->file;
        }
        $pub->title = $request->title;
        $pub->description = $request->description;
        $pub->file = $file;
        $pub->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }

    
    public function destroy($id)
    {
        $pub = PublicationModel::find($id);
      
        if($pub->file!=''){
            Storage::delete($pub->file);
        }
       
        $pub->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
