<?php


 Route::group(['namespace'=>'ankitatejani84\hello_world\Controllers','prefix'=>'ankitatejani84/hello_world'],function(){
   // Route::get('/',['as'=>'hello_world_path','uses'=>'hello_worldController@index']);
     Route::get('test', 'hello_worldController@index');
});