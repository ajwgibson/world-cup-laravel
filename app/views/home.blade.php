@extends('layouts.default')


@section('extra_css')

@stop


@section('extra_js')

@stop


@section('content')

	<h1>Scoreboard</h1>

	<div class="col-md-6">
	@if ($entries)
		<table class="table table-striped table-compact">
			<thead>
				<tr>
					<th>Score</th>
					<th>Name</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($entries as $entry)
				<tr>
					<td><span class="badge">{{{ $entry->score }}}</span></td>
					<td>{{{ $entry->fullName() }}}</td>
					<td>{{{ $entry->email }}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif
	</div>

@stop
