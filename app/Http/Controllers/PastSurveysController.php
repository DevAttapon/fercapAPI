<?php

namespace App\Http\Controllers;
use App\PastSurveryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PastSurveysController extends Controller
{
  
    public function index()
    {
        $ps = PastSurveryModel::All();
        return response()->json([
            "message" => "success",
            "data" => $ps
        ]);
    }

  
    public function store(Request $request)
    {
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
        }
        $res =   PastSurveryModel::create([
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
        $ps = PastSurveryModel::Find($id);
        return response()->json([
            "message" => "success",
            "data" => $ps
        ]);
    }

    public function update(Request $request, $id)
    {
        $ps = PastSurveryModel::find($id);
      
        if($request->file('file')!=''){
            Storage::delete($event->file);
            $file=Storage::putFile('', $request->file('file'));
        }else{
            $file = $ps->file;
        }
        $ps->title = $request->title;
        $ps->description = $request->description;
        $ps->file = $file;
        $ps->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }


    public function destroy($id)
    {
        $ps = PastSurveryModel::find($id);
      
        if($ps->file!=''){
            Storage::delete($ps->file);
        }
       
        $ps->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
