<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    
	public function index(){

		$socialweb = Task::all();
		return view('welcome', ['socialweb'=> $socialweb]);

	}
    
    public function show(Task $task){

    	// $socialweb = Task::find($id);

    	return view('tasks.show', compact('task'));

    }

    //
}
