@extends('notes.layout')

@section('content')
	<div class="row">
	<div class="col-lg-12 margin-tb">
	<div class="pull-left">

		<h2 style="font-family: 'Balsamiq Sans', cursive; margin-top: 10px;"> Edit Note</h2>
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
	<form action="{{ route('notes.update', $note->id) }}" method="POST">
	@csrf

	@method('PUT')

	<div class="row">

	<div class = "col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">

	<strong>Title:</strong>
	<input type="text" name="notes_title" value="{{ $note->notes_title}}" class="form-control" placeholder="Title">
	
	</div>
	</div>

	<div class = "col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Notes</strong>
	<input type="text" name="notes_entries" value="{{ $note->notes_entries}}" class="form-control" placeholder="Notes">

	</div>
	</div>

	<div class = "col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</div>

		</form>
		
	@endsection

	