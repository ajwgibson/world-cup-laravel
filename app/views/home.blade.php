@extends('layouts.default')


@section('extra_css')

@stop


@section('extra_js')

@stop


@section('content')

	<h1>World Cup Competition Scoreboard</h1>

	<div>
	@if ($entries)
		<ol>
		@foreach ($entries as $entry)
	        <li>{{{ $entry->fullName() }}} <span class="badge">{{{ $entry->score }}}</span></li>
	    @endforeach
		</ol>
	@endif
	</div>

@stop
