@extends('layouts.app')

@section('content')
<h1><span class="fa fa-cc"></span> Contact</h1>
@if(!empty($contacts))
<ul>
	@foreach($contacts as $contact)
	<li>{{ $contact->name }}</li>
	@endforeach
</ul>
@endif
@endsection