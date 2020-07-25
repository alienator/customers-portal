@extends('layout')

@section('user-name')
    {{ $customer->full_name }}
@endsection

@section('content')
    <div class="col-10">
	<form action="/customers/{{ $customer->id }}" method="POST">
	    @csrf
	    @method('PUT')
	    <div class="card shadow mb-4">
		<div class="card-header">
		    <h2>Edit Profile Data</h2>
		</div>
		<div class="card-body">
		    <div class="form-group">
			<label for="full_name">Full name</label>
			<input type="text" class="form-control @error('full_name') is-invalid @enderror"
			       id="full_name" name="full_name" value="{{ $customer->full_name }}" />
			@error('full_name') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    <div class="form-group">
			<label for="user_name">User name</label>
			<input type="text" class="form-control @error('user_name') is-invalid @enderror"
			       id="user_name" name="user_name" value="{{ $customer->user_name }}" />
			@error('user_name') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    <div class="form-group">
			<label for="user_password">User password</label>
			<button class="btn btn-outline-primary" type="button">change</button>
		    </div>
		    <div class="form-group">
			<label for="address">Address</label>
			<textarea class="form-control @error('address') is-invalid @enderror"
				  id="address" name="address">{{ $customer->address }}</textarea>
			@error('address') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    <div class="form-group">
			<label for="city">City</label>
			<input type="text" class="form-control @error('city') is-invalid @enderror"
			       id="city" name="city" value="{{ $customer->city }}" />
			@error('city') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    <div class="form-group">
			<label for="country">Country</label>
			<input type="text" class="form-control @error('country') is-invalid @enderror" 
			       id="country" name="country" value="{{ $customer->country }}" />
			@error('country') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    <div class="form-group">
			<label for="phone">Phone number</label>
			<input type="text" class="form-control @error('phone') is-invalid @enderror"
			       id="phone" name="phone" value="{{ $customer->phone }}" />
			@error('phone') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    <div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control @error('email') is-invalid @enderror"
			       id="email" name="email" value="{{ $customer->email }}" />
			@error('email') <p class="invalid-feedback">{{ $message }}</p>@enderror
		    </div>
		    
		</div>
		<div class="card-footer">
		    <button class="btn btn-secondary" type="button">cancel</button>
		    <button class="btn btn-primary" type="submit">save</button>
		</div>
	    </div>
	</form>
    </div>
@endsection
