<?php

namespace App\Http\Controllers;
use App\TrainningModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class TrainingController extends Controller
{
    
    public function index()
    {
        $res = TrainningModel::All();
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
        $res =   TrainningModel::create([
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
        $res = TrainningModel::Find($id);
        return response()->json([
            "message" => "success",
            "data" => $res
        ]);
    }

   
   
    public function update(Request $request, $id)
    {
        $res = TrainningModel::find($id);
      
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
        $res = TrainningModel::find($id);
      
        if($res->file!=''){
            Storage::delete($res->file);
        }
       
        $res->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
