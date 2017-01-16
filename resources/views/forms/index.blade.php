@extends('layout')
@section('header')
	@include('partials.listlimit')
@stop
@section('content')

<div class="page-header">
	<h1>View Forms</h1>
</div>

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>Customer</th>
			<th>Created By</th>
			<th>Subject</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($forms as $form)
			<tr>
				<td>{{$form->id}}</td>
				<td>{{$form->customer->name}} </td>
				<td><i><u>{{$form->user->name}}</u></i> <small>at {{$form->created_at}}</small></td>
				<td>{{$form->subject}}</td>
				<td>
					<a class="btn btn-outline-info btn-sm" href="/forms/{{$form->id}}">view answers</a>
					<a class="btn btn-outline-warning btn-sm" href="/forms/{{$form->id}}/edit">edit</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@include('partials.pagination')

@stop

