@extends('layout')
@section('header')
	@include('partials.listlimit')
@stop
@section('content')

<div class="page-header">	
	<h1>View Customers</h1>
</div>

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Telephone</th>
			<th>Contact Email</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $customers as $customer )
			<tr>
				<td>{{$customer->name}}</td>
				<td>{{$customer->telephone}}</td>
				<td>{{$customer->email}}</td>
				<td>
					<a class="btn btn-outline-info btn-sm" href="/customers/{{$customer->id}}">view</a>
					<a class="btn btn-outline-warning btn-sm" href="/customers/{{$customer->id}}/edit">edit</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>


	

	
@stop