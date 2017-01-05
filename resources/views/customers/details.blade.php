<?php 
	$forms = $customer->form;
?>

@extends('layout')
@section('header')
	@include('partials.listlimit')
	@include('partials.back')
@stop
@section('content')

<div class="jumbotron">
	<div class="page-header">
		<strong><h1>{{$customer->name}}</h1></strong>
		<hr class="lead">
	</div>

	<div class="page-header">
		<h2>Information</h2>
	</div>
	<table class="table">
		<tbody>
			<tr>
				<td><strong>Number</strong></td>
				<td>{{$customer->telephone}}</td>
			</tr>
			<tr>
				<td><strong>Email Address</strong></td>
				<td>{{$customer->email}}</td>
			</tr>
		</tbody>
	</table>
</div>

	<div class="page-header">
		<h2>Completed Forms</h2>
	</div>
	@if(count($customer->form) == 0)
		<h2>None Completed</h2>
		<a href="/forms/add" class="btn btn-lg btn-info">Add Form</a>
	@else
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Subject</th>
					<th>Created by</th>
					<th>Updated</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($forms as $form)
				<?php $updated = $form->created_at == $form->updated_at; ?>
					<tr>
						<td>{{$form->id}}</td>
						<td>{{$form->subject}}</td>
						<td>{{$form->user->name}} @ {{$form->created_at}}</td>
						@if(!$updated)
							<td>{{$form->updated_at}}</td>
						@else
							<td><small>never updated</small></td>
						@endif
						<td>
							<a href="/forms/{{$form->id}}" class="btn btn-outline-info btn-sm">View Details</a>
							<a href="/forms/{{$form->id}}/edit" class="btn btn-outline-warning btn-sm">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif

@stop