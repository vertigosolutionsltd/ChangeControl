@extends('layout')
@section('content')

<div class="col-sm-12 col-md-8 offset-md-2">
	<h1>Add Customer</h1>
	<form method="POST" action="/customers/add">
		<div class="form-group">
			<label for="name">Name</label>
			<input name="name" class="form-control" value="{{ old('name') }}" placeholder="Vertigo Solutions" />
		</div>

		<div class="form-group">
			<label for="email">Contact Email Address</label>
			<input name="email" class="form-control" value="{{ old('email') }}" />
		</div>

		<div class="form-group">
			<label for="telephone">Telephone Number</label>
			<input name="telephone" class="form-control" value="{{ old('telephone]') }}" />
		</div>

		<div class="form-group">
			{{ csrf_field() }}
			<button type="submit" class="btn btn-primary">Submit Customer</button>
		</div>

	</form>
</div>

@stop