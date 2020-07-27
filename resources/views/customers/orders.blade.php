@extends('layout')

@section('user-name')
    {{ $customer->full_name }}
@endsection

@section('content')
    <div class="col">
	<table class="table table-bordered table-hover">
	    <thead>
		<tr>
		    <th>ID</th>
		    <th>Creation Date</th>
		    <th>Total</th>
		    <th>Status</th>
		</tr>
	    </thead>
	    <tbody>
		@foreach($customer->orders as $order)
		    <tr>
			<td>{{ $order->id }}</td>
			<td>{{ $order->created_at }}</td>
			<td>{{ $order->total }}</td>
			<td>{{ $order->status }}</td>
		    </tr>
		@endforeach
	    </tbody>
	</table>
    </div>
@endsection
