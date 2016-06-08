<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class HomeController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	$tasks = Task::all();
    	return view("tasks",compact('tasks'));
    }

    public function addTask(Request $request){
    	#dd($request->name);
    	$task = new Task;
    	$task->name = $request->name;
    	$task->save();
    	$tasks = Task::all();
    	return view("tasks",compact('tasks'));
    }
    
    public function delete_task(Request $request){
    	#dd($request->id);
    	$task = Task::find($request->id);
    	$task->delete();
    	$tasks = Task::all();
    	return view("tasks",compact('tasks'));
    }
}
