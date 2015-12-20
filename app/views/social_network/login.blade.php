@extends('master')

@section('css')
	.panel{
		position: absolute;
		top:  200px;
	}
@endsection

@section('content')

	<div class='container'>
		<div class='col-md-offset-4 col-md-4'>
			<div class='panel panel-primary'>
				<div class='panel-heading'>
					<h3>Login</h3>
				</div>
				<div class='panel-body'>
					{{ Form::open() }}
						<div class='form-group'>
							{{ Form::input('text','username',null,['class' => 'form-control']); }}
						</div>
						<div class='form-group'>
							{{ Form::input('password','password',null,['class' => 'form-control']) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>

@endsection