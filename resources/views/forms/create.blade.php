@extends('layout')

@section('content')



<div class="col-sm-12 col-md-8 offset-md-2">
	<div class="page-header">
		<h1>Create a Change Control Form</h1>
	</div>
	<form method="POST" action="/forms/add">

		<div class="form-group">
			<label for="customer_id">Customer Name</label>
			<select name="customer_id" class="form-control">
				@foreach ($customers as $customer)
					<option value="{{$customer->id}}">{{$customer->name}}</option>
				@endforeach
			</select>
		</div>
	
		<div class="form-group">
			<label for="subject">Subject</label>
			<input name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Quick breakdown of work" />
		</div>

		<div class="form-group">
			<label for="a1">1) WHAT Changes are you making?</label>
			<textarea name="a1" class="form-control">{{ old('a1') }}</textarea>
		</div>

		<div class="form-group">
			<label for="a2">2) WHY are you making the changes?</label>
			<textarea name="a2" class="form-control">{{ old('a2]') }}</textarea>
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
			<button type="submit" class="btn btn-primary">Submit Change Control</button>
		</div>
	</form>
</div>


@stop