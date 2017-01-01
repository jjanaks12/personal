@extends('layouts.app')

@section('content')
<div class="page-header">
	<h1><span class="fa fa-cc"></span> Contact</h1>
</div>
<div class="row">
	<div class="col-md-6">
		@if(!empty($contacts))
		<ul>
			@foreach($contacts as $contact)
			<li>{{ $contact->name }}</li>
			@endforeach
		</ul>
	</div>
	<div class="col-md-4">
		{!! Form::open(['route' => 'contact.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{{ Form::label('name', 'Full Name:') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type your Full Name...']) }}
		</div>
		<div class="form-group">
			{{ Form::label('description', 'Full Details:') }}
			{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Full description']) }}
		</div>
		{{ Form::submit('Save !!', ['class' => 'btn btn-success']) }}
		{!! Form::close() !!}
	</div>
</div>
@endif
@endsection