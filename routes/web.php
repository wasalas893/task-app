<?php


Route::get('/', function () {

    return view('welcome');
});
Route::get('/tacks',function(){
    $data=App\task::all();
   return view('bootsrap')->with('bootsrap',$data);
});


Route::post('/savetask','Taskcontroller@store');

//markascompleted adala route ak we
Route::get('/markascompleted/{id}','Taskcontroller@updateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','Taskcontroller@updateTaskAsnotCompleted');//not complet aketa route ake


Route::get('/deletetask/{id}','Taskcontroller@deletetask');//delete

Route::get('updatetask/{id}','Taskcontroller@updatetaskview');//update ake

Route::post('/updatetasks','Taskcontroller@updatetask');
