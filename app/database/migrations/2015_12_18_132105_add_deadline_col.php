<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeadlineCol extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//add deadline to the task.
		Schema::table('todolist',function($table){
			$table->date('deadline');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//remove deadline column from todolist table.
		Schema::table('todolist',function($table){
			$table->dropColumn('deadline');
		});
	}

}
