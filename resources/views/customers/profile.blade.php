@extends('layout')

@section('user-name')
    {{ $customer->full_name }}
@endsection

@section('content')
    <div class="col-10">
	<form>
	    <div class="card shadow mb-4">
		<div class="card-header">
		    <h2>Edit Profile Data</h2>
		</div>
		<div class="card-body">
		    <div class="form-group">
			<label for="full_name">Full name</label>
			<input type="text" class="form-control" id="full_name" id="full_name" value="{{ $customer->full_name }}" />
		    </div>
		    <div class="form-group">
			<label for="user_name">User name</label>
			<input type="text" class="form-control" id="full_name" id="full_name" value="{{ $customer->user_name }}" />
		    </div>
		    <div class="form-group">
			<label for="user_password">User password</label>
			<button class="btn btn-outline-primary" type="button">change</button>
		    </div>
		    <div class="form-group">
			<label for="address">Address</label>
			<textarea class="form-control" id="address" name="address">{{ $customer->address }}</textarea>
		    </div>
		    <div class="form-group">
			<label for="city">City</label>
			<input type="text" class="form-control" id="city" name="city" value="{{ $customer->city }}" />
		    </div>
		    <div class="form-group">
			<label for="country">Country</label>
			<input type="text" class="form-control" id="country" name="country" value="{{ $customer->country }}" />
		    </div>
		    <div class="form-group">
			<label for="phone">Phone number</label>
			<input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" />
		    </div>
		    <div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" id="email" name="email" value="{{ $customer->email }}" />
		    </div>
		    
		</div>
		<div class="card-footer">
		    <button class="btn btn-secondary" type="button">cancel</button>
		    <button class="btn btn-primary" type="button">save</button>
		</div>
	    </div>
	</form>
    </div>
@endsection
