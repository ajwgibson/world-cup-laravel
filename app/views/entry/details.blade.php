@extends('layouts.default')

@section('content')

	<h1>Competition entry details</h1>
	<p style="margin-bottom: 20px; font-size: large;">
		<em><strong>{{{ $entry->fullNameAndEmailAddress() }}}</strong></em>
	</p>

	<div>
	@if (Entry::canCreateOrEdit())
		{{ link_to_route(
				'entry.edit', 
				'Change my predictions', 
				$parameters = array(),
				$attributes = array('class' => 'btn btn-primary')) }}
	@endif
	</div>

	<h3 class="underlined">Group placings</h3>
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<h4>Group A</h4>
			<ol>
				<li>{{{ $entry->ga_1 }}}</li>
				<li>{{{ $entry->ga_2 }}}</li>
				<li>{{{ $entry->ga_3 }}}</li>
				<li>{{{ $entry->ga_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Group B</h4>
			<ol>
				<li>{{{ $entry->gb_1 }}}</li>
				<li>{{{ $entry->gb_2 }}}</li>
				<li>{{{ $entry->gb_3 }}}</li>
				<li>{{{ $entry->gb_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Group C</h4>
			<ol>
				<li>{{{ $entry->gc_1 }}}</li>
				<li>{{{ $entry->gc_2 }}}</li>
				<li>{{{ $entry->gc_3 }}}</li>
				<li>{{{ $entry->gc_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Group D</h4>
			<ol>
				<li>{{{ $entry->gd_1 }}}</li>
				<li>{{{ $entry->gd_2 }}}</li>
				<li>{{{ $entry->gd_3 }}}</li>
				<li>{{{ $entry->gd_4 }}}</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<h4>Group E</h4>
			<ol>
				<li>{{{ $entry->ge_1 }}}</li>
				<li>{{{ $entry->ge_2 }}}</li>
				<li>{{{ $entry->ge_3 }}}</li>
				<li>{{{ $entry->ge_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Group F</h4>
			<ol>
				<li>{{{ $entry->gf_1 }}}</li>
				<li>{{{ $entry->gf_2 }}}</li>
				<li>{{{ $entry->gf_3 }}}</li>
				<li>{{{ $entry->gf_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Group G</h4>
			<ol>
				<li>{{{ $entry->gg_1 }}}</li>
				<li>{{{ $entry->gg_2 }}}</li>
				<li>{{{ $entry->gg_3 }}}</li>
				<li>{{{ $entry->gg_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-3">
			<h4>Group H</h4>
			<ol>
				<li>{{{ $entry->gh_1 }}}</li>
				<li>{{{ $entry->gh_2 }}}</li>
				<li>{{{ $entry->gh_3 }}}</li>
				<li>{{{ $entry->gh_4 }}}</li>
			</ol>
		</div>
	</div>

	<h3 class="underlined">Final 16 teams</h3>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<ol>
				<li>{{{ $entry->f16_1 }}}</li>
				<li>{{{ $entry->f16_2 }}}</li>
				<li>{{{ $entry->f16_3 }}}</li>
				<li>{{{ $entry->f16_4 }}}</li>
				<li>{{{ $entry->f16_5 }}}</li>
				<li>{{{ $entry->f16_6 }}}</li>
				<li>{{{ $entry->f16_7 }}}</li>
				<li>{{{ $entry->f16_8 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-6">
			<ol start="9">
				<li>{{{ $entry->f16_9 }}}</li>
				<li>{{{ $entry->f16_10 }}}</li>
				<li>{{{ $entry->f16_11 }}}</li>
				<li>{{{ $entry->f16_12 }}}</li>
				<li>{{{ $entry->f16_13 }}}</li>
				<li>{{{ $entry->f16_14 }}}</li>
				<li>{{{ $entry->f16_15 }}}</li>
				<li>{{{ $entry->f16_16 }}}</li>
			</ol>
		</div>
	</div>

	<h3 class="underlined">Final 8 teams</h3>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<ol>
				<li>{{{ $entry->f8_1 }}}</li>
				<li>{{{ $entry->f8_2 }}}</li>
				<li>{{{ $entry->f8_3 }}}</li>
				<li>{{{ $entry->f8_4 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-6">
			<ol start="5">
				<li>{{{ $entry->f8_5 }}}</li>
				<li>{{{ $entry->f8_6 }}}</li>
				<li>{{{ $entry->f8_7 }}}</li>
				<li>{{{ $entry->f8_8 }}}</li>
			</ol>
		</div>
	</div>

	<h3 class="underlined">Final 4 teams</h3>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<ol>
				<li>{{{ $entry->f4_1 }}}</li>
				<li>{{{ $entry->f4_2 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-6">
			<ol start="3">
				<li>{{{ $entry->f4_3 }}}</li>
				<li>{{{ $entry->f4_4 }}}</li>
			</ol>
		</div>
	</div>

	<h3 class="underlined">Final 2 teams</h3>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<ol>
				<li>{{{ $entry->f2_1 }}}</li>
			</ol>
		</div>
		<div class="col-sm-6 col-md-6">
			<ol start="2">
				<li>{{{ $entry->f2_2 }}}</li>
			</ol>
		</div>
	</div>

	<h3 class="underlined">The winner</h3>
	<div style="margin: 20px; font-size: x-large;">
		<strong><em>{{{ $entry->winner }}}</em></strong>
	</div>

@stop