<?php

namespace App\Http\Controllers;
use App\PhotoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class PhotoController extends Controller
{
    
    public function index()
    {
        $photo = PhotoModel::All();
        return response()->json([
            "message" => "success",
            "data" => $photo
        ]);
    }

    public function store(Request $request)
    {
        if($request->file('image')!=''){
            $img=Storage::putFile('', $request->file('image'));
        }
        $res =   PhotoModel::create([
                'caption' => $request->caption,
                'img' => $img
            ]);
            return response()->json([
                "message" => "success"
            ]);
    }

    public function show($id)
    {
        $photo = PhotoModel::find($id);
        return response()->json([
            "message" => "Success",
            "data" => $photo            
        ]);
    }

   
    public function update(Request $request, $id)
    {
        $ps = PhotoModel::find($id);
      
        if($request->file('image')!=''){
            Storage::delete($event->img);
            $file=Storage::putFile('', $request->file('image'));
        }else{
            $file = $ps->img;
        }
        $ps->caption = $request->caption;
        $ps->img = $file;
        $ps->save();

        return response()->json([
            'message' => 'Update success'
        ]);
    }

   
    public function destroy($id)
    {
        $ps = PhotoModel::find($id);
      
        if($ps->img!=''){
            Storage::delete($ps->img);
        }
       
        $ps->delete(); 
       
        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}
