<?php

namespace App\Http\Controllers;
use App\LinkModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class LinksController extends Controller
{
    
    public function index()
    {
        $link = LinkModel::all();
        return response()->json([
            "message" => "success",
            "data" => $link
        ]);
    }

  
    public function store(Request $request)
    {
       
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
        }
        $res =   LinkModel::create([
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
        $link = LinkModel::find($id);
        return response()->json([
            "message" => "success",
            "data" => $link
        ]);
    }

  
    public function update(Request $request, $id)
    {
        $link = LinkModel::find($id);
      
        if($request->file('file')!=''){
            Storage::delete($event->file);
            $file=Storage::putFile('', $request->file('file'));
        }else{
            $file = $link->file;
        }
        $link->title = $request->title;
        $link->description = $request->description;
        $link->file = $file;
        $link->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }

    public function destroy($id)
    {
        $link = LinkModel::find($id);
      
        if($link->file!=''){
            Storage::delete($link->file);
        }
       
        $link->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
