@extends('master')

@section('css')

@endsection

@section('content')
	<div class='container-fluid'>
		<div class='col-md-6 col-md-offset-3'>
			<div class='panel panel-success'>
				<div class='panel-heading'><h3>Login Panel</h3></div>
				<div class='panel-body'>
					<form>
						<div class='form-group'>
							<label for='username'>username : </label>
							<input class='form-control' type='text' id='username'>
						</div>
						<div class='form-group'>
							<label for='password'>password : </label>
							<input class='form-control' type='password' id='password'>
						</div>
						<div class='form-group'>
							<button class='btn btn-success' onclick='login()'>Submit</button>
							<button class='btn btn-success' type="Reset" id="reset">Reset</button>
						<div>
					</form>
				</div>
			</div>
		</div>
		<div class='panel-footer'>&copy; Sai Kiran {{ date('Y') }}</div>
	</div>
@endsection

@section('script')
	$(document).ready(function(){ alert('hello'); });
	$('form').on('submit',function(e){
		//e.preventDefault();
	})
	function login(){
		var username = $("#username").val();
		var password = $("#password").val();
		if(username==='saikiran' && password==='yoyo') location.href='/about';
		else {$("#reset").click(); alert(username+password);}
	}
@endsection