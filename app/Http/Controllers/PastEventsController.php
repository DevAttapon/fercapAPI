<?php

namespace App\Http\Controllers;
use App\PastEventModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PastEventsController extends Controller
{
   
    public function index()
    {
        $pastenevt = PastEventModel::All();
        return response()->json([
            "message" => "success",
            "data" => $pastenevt
        ]);
    }

   
    public function store(Request $request)
    {
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
        }
        $res =   PastEventModel::create([
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
        $pastenevt = PastEventModel::Find($id);
        return response()->json([
            "message" => "success",
            "data" => $pastenevt
        ]);
    }

    public function update(Request $request, $id)
    {
        $pastenevt = PastEventModel::find($id);
      
        if($request->file('file')!=''){
            Storage::delete($event->file);
            $file=Storage::putFile('', $request->file('file'));
        }else{
            $file = $pastenevt->file;
        }
        $pastenevt->title = $request->title;
        $pastenevt->description = $request->description;
        $pastenevt->file = $file;
        $pastenevt->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }

   
    public function destroy($id)
    {
        $pastenevt = PastEventModel::find($id);
      
        if($pastenevt->file!=''){
            Storage::delete($pastenevt->file);
        }
       
        $pastenevt->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
