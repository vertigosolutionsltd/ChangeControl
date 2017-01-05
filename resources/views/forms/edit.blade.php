<?php 
	$answer = json_decode($form->answers);
?>
@extends('layout')

@section('content')
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Warning!</strong> You're editing "{{$form->subject}}" for {{$form->customer->name}}
	</div>
<div class="col-sm-12 col-md-8 offset-md-2">
	<div class="page-header">
		<h1>Edit Change Control Form </h1>
	</div>
	<form action="forms/{{$form->id}}" method="POST">

		<div class="form-group">
			<label for="subject">Subject</label>
			<input name="subject" class="form-control" disabled value="{{$form->subject}}" />
		</div>

		<div class="form-group">
			<label for="a1">1) WHAT Changes are you making?</label>
			<textarea name="a1" class="form-control">{{ old('a1')}}</textarea>
		</div>

		<div class="form-group">
			<label for="a2">2) WHY are you making the changes?</label>
			<textarea name="a2" class="form-control">{{ old('a2') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a3">3) What impact will it have on the business?</label>
			<textarea name="a3" class="form-control">{{ old('a3') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a4">4) Will there be any downtime?</label>
			<select name="a4" class="form-control">
				<option value="yes">Yes</option>
				<option value="no">No</option>
			</select>
		</div>

		<div class="form-group">
			<label for="a5">5) If yes, to what and how long?</label>
			<textarea name="a5" class="form-control">{{ old('a5') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a6">6) What could go wrong?</label>
			<textarea name="a6" class="form-control">{{ old('a6') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a7">7) How can you protect the systems from it going wrong?</label>
			<textarea name="a7" class="form-control">{{ old('a7') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a8">8) How long will that take??</label>
			<div class="input-group">
				<input name="a8" type="number" min="0" class="form-control" value="{{ old('a8') }}" />
				<span class="input-group-addon">mins</span>
			</div>
		</div>

		<div class="form-group">
			<label for="a9">9) What is the procedure if it does go wrong??</label>
			<textarea name="a9" class="form-control">{{ old('a9') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a10">10) Was the change successful?</label>
			<select name="a10" class="form-control">
				<option value="yes">Yes</option>
				<option value="no">No</option>
			</select>
		</div>

		<div class="form-group">
			<label for="a11">11) If it was required, was the rollback successful?</label>
			<textarea name="a11" class="form-control">{{ old('a11') }}</textarea>
		</div>
		<div class="form-group">
			<label for="feedback"> Feedback?</label>
			<textarea name="feedback" class="form-control">{{ old('feedback') }}</textarea>
		</div>

		<div class="form-group">
			{{ csrf_field() }}
			{{method_field('patch')}}
			<button type="submit" class="btn btn-primary">Submit Change Control</button>
		</div>
	</form>
</div>


@stop