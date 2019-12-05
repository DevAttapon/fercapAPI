<?php

namespace App\Http\Controllers;
use App\ResearchModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ResearchController extends Controller
{
    
    public function index()
    {
       $res = ResearchModel::All();
       return response()->json([
           "message" => "success",
           "data" => $res
       ]);
    }

    public function store(Request $request)
    {
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
        }
        $res =   ResearchModel::create([
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
        $res  = ResearchModel::find($id);
        return response()->json([
            "message" => "success",
            "data" => $res
        ]);
    }

   
    public function update(Request $request, $id)
    {
        $res = ResearchModel::find($id);
      
        if($request->file('file')!=''){
            Storage::delete($event->file);
            $file=Storage::putFile('', $request->file('file'));
        }else{
            $file = $res->file;
        }
        $res->title = $request->title;
        $res->description = $request->description;
        $res->file = $file;
        $res->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }

    public function destroy($id)
    {
        $res = ResearchModel::find($id);
      
        if($res->file!=''){
            Storage::delete($res->file);
        }
       
        $res->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
