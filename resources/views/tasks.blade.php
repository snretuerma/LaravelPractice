@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
	     {!!Form::open(['route'=>'home_path','class'=>'classForm']) !!}
	      <div class="row ">
		        <h4>New Task</h4>
		        <div class="input-field col s6 ">
		          <input placeholder="" id="task" type="text" name="name" class="validate">
		        </div>
	        </div>
	        <button id="add" class="btn waves-effect waves-light" type="submit" name="action">Add Task
	    		<i class="material-icons right">add</i>
	  		</button>
	    {!!Form::close()!!}
	   
	  </div>

	  <div class="row">
		   <ul class="collection with-header">
	        <li class="collection-header"><h4>Task</h4></li>
	        @foreach($tasks as $task)
	     	<li class="collection-item">
	     		{{$task->name}}
	     		{!!Form::open(['route'=>'home_path', 'method'=>'DELETE', 'class'=>'deleteForm'])!!}
	     			<input type="hidden" name="id" value="{{$task->id}}">
	     			<button href="#!" class="btn waves-effect waves-light secondary-content deleteButton">Delete<i class="material-icons">delete</i></button>
	     		{!!Form::close()!!}
	     	</li>
	      	@endforeach
	      </ul>
	  </div>
  </div>
 
@endsection

@section('customScript')
	<script type="text/javascript" src="js/task.js"></script>
	<script type="text/javascript" src="js/manageTask_script.js"></script>
@endsection
