<?php

class Todo extends Eloquent{
	
	protected $table = 'todolist';
	protected $fillable = array('task','status','deadline');
	
}

?>