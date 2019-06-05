<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
class Taskcontroller extends Controller
{
    public function store(Request $request){
           //dd($request->all());
           $taskk=new task;//(tack kiyanna model ake name ake we)
        //error pennaa ake
         $this->validate($request,[
             'task'=>'required|max:100|min:5',
         ]);



           $taskk->taks=$request->task;
           $taskk->save();

           //data tika stro kare ganima varible akekkata
           $data=task::all();

           //data tika view akekata stroge kara agenima
           return view('bootsrap')->with('bootsrap',$data);
    }
    //compleed adala ake
    public function updateTaskAsCompleted($id){
        $taskk=task::find($id);
        $taskk->iscompleted=1;
        $taskk->save();
        return redirect()->back();

    }
    //note compete aadalal ake
    public function updateTaskAsnotCompleted($id){
        $taskk=task::find($id);
        $taskk->iscompleted=0;
        $taskk->save();
        return redirect()->back();

    }
    //delete aketa adala ake
    public function deletetask($id){
        $taskk=task::find($id);
        $taskk->delete();
        return redirect()->back();

    }
    //update aketa adela ake
    public function updatetaskview($id){
        $taskk=task::find($id);//id aketa adala siyaluma data soya ganiii fine method aken
        //aluth view akek sada ganaiii

        return view('updatetask')->with('taskdata',$taskk);
    }
    public function updatetask(Request $request){
        dd($request);
    }


}
