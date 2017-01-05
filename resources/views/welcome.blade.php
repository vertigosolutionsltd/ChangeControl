@extends('layout')
@section('content')
	
	<div class="jumbotron">
		<h1>Vertigo Solutions</h1>
			@if (Auth::guest())
				<p class="lead">Please log in to use the functionallity.</p>
			@else
				<h2 class="lead">Welcome, {{ucwords(Auth::user()->name )}}.</h2>
			@endif
    	<p class="small">All work carried out at the datacenter sould be logged using the form.</p>

	</div>
		@if (Auth::guest())
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
			</p>
		@else 
			<div class="page-header">
				<h1>Forms</h1>
				<hr class="lead"></hr>
				<div class="actions">
					<a class="btn btn-info btn-md" href="/forms/create">Create Form</a>
					<a class="btn btn-info btn-md" href="/forms">View Forms</a>
				</div>
			</div>
			
			<div class="page-header">
				<h1>Customers</h1>
				<hr class="lead"></hr>
				<div class="actions">
					<a class="btn btn-info btn-md" href="/customers/add">Add Customer</a>
					<a class="btn btn-info btn-md" href="/customers">View Customers</a>
				</div>
			</div>
			
		@endif
	

@stop
