<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

Route::apiResource('events','EventController');
Route::apiResource('links','LinksController');
Route::apiResource('pastevent','PastEventsController');
Route::apiResource('pastsurvey','PastSurveysController');
Route::apiResource('photos','PhotoController');
Route::apiResource('publications','PublicationsController');
Route::apiResource('research','ResearchController');
Route::apiResource('training','TrainingController');
Route::apiResource('updates','UpdatesController');
Route::get('filepath/{id}',function($filename){
    return response()->json([
        "message" => "success",
        "data" =>   url('/').Storage::url($filename)
    ]);
});