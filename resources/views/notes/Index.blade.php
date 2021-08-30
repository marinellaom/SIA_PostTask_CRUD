
@extends('notes.layout')

@section('content')



<div class="pull-left">

<h2 class="text-center" style="font-family: 'Balsamiq Sans', cursive; margin-top: 10px; color: green;">  Simple Note-Taking App </h2>
</div>



<div class="row">
	<div class="col-lg-12 margin-tb">

		<div class ="pull-right text-center" style="margin-bottom: 10px;">
			<a class = "btn btn-outline-success" href="{{route('notes.create')}}"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 17 18">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Add Notes</a>

		</div>
		</div>
		</div>
		
		@if($message = Session::get('success'))
			<div class="alert alert-success">
			<p>{{ $message }}</p>
			</div>
		@endif

		<table class="table table-borderless" style="border-top:1.5px solid green; border-bottom:1.5px solid green;">
            
		<tr>
			<th> No. </th>
			<th> Title</th>
			<th> Notes</th>
			<th width="280px">Action</th>
		</tr>
		@foreach ($notes as $note)
		<tr class="table-success">
			<td>{{ ++$i }}</td>
			<td>{{ $note->notes_title}}</td>
			<td>{{ $note->notes_entries}}</td>
			<td>

		<form action="{{ route('notes.destroy', $note->id) }}" method="POST">

		<!-- <a class="btn btn-info" href="{{ route('notes.show', $note->id) }}">Show</a> -->
		<a class="btn btn-primary " href="{{ route('notes.edit', $note->id) }}">Edit</a>

		@csrf
		@method('DELETE')

		<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</td>
</tr>

@endforeach

</table>

