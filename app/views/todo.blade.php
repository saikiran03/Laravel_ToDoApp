@extends('master')

@section('css')
	body{
		background-color: teal;
		padding-top: 50px;
	}
	.panel{
		box-shadow: 0 0 30px black;
	}
	.panel:hover{
		box-shadow: 0 0 40px black;
	}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading text-center">
					<h3>To Do List &nbsp; <button class="btn btn-success" data-toggle="modal" data-target="#todoModal">+</button></h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover table-bordered" id="todolist">
						<thead>
							<th>Deadline</th>
							<th>Title</th>
							<th>Status</th>
							<th>Change Status</th>
						</thead> 
						<tbody>
							@foreach($records as $task)
								@if($task['status']==0)
									<tr class='bg-warning'>
								@else
									<tr class="bg-success">
								@endif
									<td>{{ $task['deadline'] }}</td>
									<td>{{ $task['task'] }}</td>
									
									@if($task['status']==0)
										<td>Waiting...</td>
										<td><a href="/changeStat/{{ $task['id'] }}"><button class="btn btn-sm btn-success">Done</button></a></td>
									@else
										<td>Completed</td>
										<td><a href="/changeStat/{{ $task['id'] }}"><button class="btn btn-sm btn-success">Undo</button></a></td>
									@endif
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- add todo Modal start -->
	<div class="modal fade" id="todoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				{{ Form::open( array( 'url' => 'todo' ) ) }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Add ToDo</h4>
				</div>
				<div class="modal-body">
						<div class='form-group'>
							{{ Form::input('text','task',null,['class' =>'form-control', 'placeholder' => 'Enter Task']); }}
						</div>
						<div class='form-group'>
							{{ Form::input('date','deadline',null,['class' => 'form-control', 'placeholder' => 'date']); }}
						</div>
				</div>
				<div class="modal-footer">
					{{ Form::input('submit','Save Task',null,['class' => 'btn btn-success']); }}
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
	<!-- End of modal -->
@endsection

@section('script')
	$('document').ready(function(){
		$("th, tr").each(function(){
			$(this).addClass('text-center');
		});
		setTimeout(function(){
			if($(".well").html()!==""){
				$(".well").fadeOut(2000);
			}
		},3000);
	});
@endsection