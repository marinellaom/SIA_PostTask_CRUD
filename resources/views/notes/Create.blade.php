@extends('notes.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
	<div class="pull-left">
	
	<h2 style="font-family: 'Balsamiq Sans', cursive; margin-top: 10px;"> Add New Notes</h2>
	</div>
	
	<div class="pull-right">
		<a class="btn btn-secondary" href="{{ route('notes.index') }}"> Back</a>
	</div>
	</div>
	</div>

	@if($errors->any())
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input. <br><br>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		</div>
	@endif
	<form action="{{ route('notes.store') }}" method="POST">
	
    @csrf

	<div class ="row">
	<div class = "col-xs-12 col-sm-12 cold-md-12">
		<div class="form-group">
			<strong> Title </strong>
			<input type="text" name="notes_title" class="form-control" placeholder="note title">
		</div>
		</div>

		<div class = "col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Notes</strong>
			<input type="text" name="notes_entries" class="form-control" placeholder="note entry">
		</div>
		</div>

		<div class = "col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</div>

		</form>
		
@endsection
