@extends('layout')

@section('user-name')
    {{ $customer->full_name }}
@endsection

@section('content')
    <div class="col">
	<table class="table">
	    <tr>
		<td>Order number:</td>
		<td>{{ $order->id }}</td>
	    </tr>
	    <tr>
		<td>Date:</td>
		<td>{{ $order->created_at }}</td>
	    </tr>
	    <tr>
		<td>Total:</td>
		<td>{{ $order->total }}</td>
	    </tr>
	    <tr>
		<td></td>
		<td>
		    <div class="alert 
				@switch($order->status) 
				@case('pending')
				alert-info
				@break
				@case('shipped')
				alert-warning
				@break
				@case('complete')
				alert-success
				@break
				@endswitch
				">{{ $order->status }}</div>
		</td>
	    </tr>
	</table>
    </div>
@endsection
