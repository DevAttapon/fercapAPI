<?php

namespace App\Http\Controllers;
use App\UpdateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class UpdatesController extends Controller
{
    public function index()
    {
        $events = UpdateModel::all();
        return response()->json([
            "message" => "success",
            "data" => $events
        ]);
    }

   
 
    public function store(Request $request)
    {
        if($request->file('image')!=''){
            $pic=Storage::putFile('', $request->file('image'));
        }
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
        }
      $res =   UpdateModel::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' =>  $pic,
            'file' => $file
        ]);
        return response()->json([
            "message" => "success"
        ]);
    }

  
    public function show($id)
    {
        $events = UpdateModel::find($id);
        return response()->json([
            "message" => "success",
            "data" => $events
        ]);
    }

  
    public function update(Request $request, $id)
    {
        $events = UpdateModel::find($id);
        if($request->file('image')!=''){
            Storage::delete($event->img);
            $pic=Storage::putFile('', $request->file('image'));
        }else{
            $pic = $events->img;
        }
        if($request->file('file')!=''){
            Storage::delete($event->file);
            $file=Storage::putFile('', $request->file('file'));
        }else{
            $file = $events->file;
        }
        $events->title = $request->title;
        $events->description = $request->description;
        $events->img = $pic;
        $events->file = $file;
        $events->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }

   
    public function destroy($id)
    {
        $event = UpdateModel::find($id);
        if($event->img!=''){
            Storage::delete($event->img);
        }
        if($event->file!=''){
            Storage::delete($event->file);
        }
       
        $event->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
