<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajaxget',function(){
    if(Request::ajax()){
        return "Ajax get resmondendo";
    }
});

Route::post('/ajaxpost',function(){
    if(Request::ajax()){
        return Response::json(Request::all());
    }
});