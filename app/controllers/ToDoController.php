<?php

class ToDoController extends BaseController{

	public function changeStatus($id){
		$curStat = DB::table('todolist')->where('id',$id)->pluck('status');
		if($curStat) $curStat=0;
		else $curStat=1;
		DB::table('todolist')
			->where('id',$id)
			->update(array('status' => $curStat));
		$records = ToDo::all();
		return View::make('/todo',array(
			'records' => $records
		));
	}

}

?>