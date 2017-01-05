@extends('layout')

@section('header')
	@include('partials.back')
@stop

@section('content')
	
	<div class="page-header">
		<h1><em>"{{$form->subject}}"</em></h1>
		<p>Created by <i><u>{{$form->user->name}}</u></i> at <small>{{$form->created_at}}</small> for <i><u>{{$form->customer->name}}</u></i></p>
	</div>
	<?php 
		$answers 	= json_decode($form->answers);
		$count 		= 1;
	?>

	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Question</th>
				<th>Answer</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($answers as $answer)
				<tr>
					<td>Question {{$count}}</td>
					<td>{{$answer}}</td>
				</tr>
				<?php $count++; ?>
			@endforeach
		</tbody>
	</table>

	
	<div class="panel panel-default">
		<div class="panel-body">
			<strong>Feedback</strong> -{{$form->feedback}}
		</div>
	</div>

@stop