@extends('master')

@section('content')
    <div class='container-fluid'>
    	<div class='col-md-3'>
    		@foreach($users as $user)
    			<div class='alert alert-warning'>{{ $user }}</div>
    		@endforeach
    	</div>
    </div>
@endsection
