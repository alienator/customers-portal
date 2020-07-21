@extends('layout')

@section('user-name')
    {{ $customer->full_name }}
@endsection

@section('content')
    <div class="col-10">
	<div class="card shadow mb-4">
	    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary"> {{ $customer->full_name  }} </h6>
	    </div>
	    <div class="card-body">
		<ul>
		    <li>
			User name: {{ $customer->user_name  }}
		    </li>
		    <li>
			User password: *********
		    </li>
		</ul>
	    </div>
	    <div class="card-footer">
		<button class="btn btn-primary" type="button">edit</button>
	    </div>
	</div>	
    </div>
@endsection


