
@extends('layouts.default')

@section('content')

	<h1>Make your predictions</h1>

	{{ Form::model($entry, array('action' => 'EntryController@update')) }}

	<fieldset>
		<legend>Predict the final group placings</legend>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<h4>Group A</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'ga_1', 'label' => '1', 'teams' => Entry::$group_a_teams))
					@include('entry._team_selector', array('name' => 'ga_2', 'label' => '2', 'teams' => Entry::$group_a_teams))
					@include('entry._team_selector', array('name' => 'ga_3', 'label' => '3', 'teams' => Entry::$group_a_teams))
					@include('entry._team_selector', array('name' => 'ga_4', 'label' => '4', 'teams' => Entry::$group_a_teams))
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Group B</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'gb_1', 'label' => '1', 'teams' => Entry::$group_b_teams))
					@include('entry._team_selector', array('name' => 'gb_2', 'label' => '2', 'teams' => Entry::$group_b_teams))
					@include('entry._team_selector', array('name' => 'gb_3', 'label' => '3', 'teams' => Entry::$group_b_teams))
					@include('entry._team_selector', array('name' => 'gb_4', 'label' => '4', 'teams' => Entry::$group_b_teams))
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Group C</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'gc_1', 'label' => '1', 'teams' => Entry::$group_c_teams))
					@include('entry._team_selector', array('name' => 'gc_2', 'label' => '2', 'teams' => Entry::$group_c_teams))
					@include('entry._team_selector', array('name' => 'gc_3', 'label' => '3', 'teams' => Entry::$group_c_teams))
					@include('entry._team_selector', array('name' => 'gc_4', 'label' => '4', 'teams' => Entry::$group_c_teams))
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Group D</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'gd_1', 'label' => '1', 'teams' => Entry::$group_d_teams))
					@include('entry._team_selector', array('name' => 'gd_2', 'label' => '2', 'teams' => Entry::$group_d_teams))
					@include('entry._team_selector', array('name' => 'gd_3', 'label' => '3', 'teams' => Entry::$group_d_teams))
					@include('entry._team_selector', array('name' => 'gd_4', 'label' => '4', 'teams' => Entry::$group_d_teams))
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<h4>Group E</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'ge_1', 'label' => '1', 'teams' => Entry::$group_e_teams))
					@include('entry._team_selector', array('name' => 'ge_2', 'label' => '2', 'teams' => Entry::$group_e_teams))
					@include('entry._team_selector', array('name' => 'ge_3', 'label' => '3', 'teams' => Entry::$group_e_teams))
					@include('entry._team_selector', array('name' => 'ge_4', 'label' => '4', 'teams' => Entry::$group_e_teams))
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Group F</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'gf_1', 'label' => '1', 'teams' => Entry::$group_f_teams))
					@include('entry._team_selector', array('name' => 'gf_2', 'label' => '2', 'teams' => Entry::$group_f_teams))
					@include('entry._team_selector', array('name' => 'gf_3', 'label' => '3', 'teams' => Entry::$group_f_teams))
					@include('entry._team_selector', array('name' => 'gf_4', 'label' => '4', 'teams' => Entry::$group_f_teams))
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Group G</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'gg_1', 'label' => '1', 'teams' => Entry::$group_g_teams))
					@include('entry._team_selector', array('name' => 'gg_2', 'label' => '2', 'teams' => Entry::$group_g_teams))
					@include('entry._team_selector', array('name' => 'gg_3', 'label' => '3', 'teams' => Entry::$group_g_teams))
					@include('entry._team_selector', array('name' => 'gg_4', 'label' => '4', 'teams' => Entry::$group_g_teams))
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Group H</h4>
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'gh_1', 'label' => '1', 'teams' => Entry::$group_h_teams))
					@include('entry._team_selector', array('name' => 'gh_2', 'label' => '2', 'teams' => Entry::$group_h_teams))
					@include('entry._team_selector', array('name' => 'gh_3', 'label' => '3', 'teams' => Entry::$group_h_teams))
					@include('entry._team_selector', array('name' => 'gh_4', 'label' => '4', 'teams' => Entry::$group_h_teams))
				</div>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>Predict the final 16 teams</legend>
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f16_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_3', 'label' => '3', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_4', 'label' => '4', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_5', 'label' => '5', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_6', 'label' => '6', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_7', 'label' => '7', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_8', 'label' => '8', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f16_9', 'label' => '9', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_10', 'label' => '10', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_11', 'label' => '11', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_12', 'label' => '12', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_13', 'label' => '13', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_14', 'label' => '14', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_15', 'label' => '15', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f16_16', 'label' => '16', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>Predict the final 8 teams</legend>
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f8_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f8_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f8_3', 'label' => '3', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f8_4', 'label' => '4', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f8_5', 'label' => '5', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f8_6', 'label' => '6', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f8_7', 'label' => '7', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f8_8', 'label' => '8', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>Predict the final 4 teams</legend>
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f4_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f4_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f4_3', 'label' => '3', 'teams' => Entry::getAllTeams()))
					@include('entry._team_selector', array('name' => 'f4_4', 'label' => '4', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>Predict the final 2 teams</legend>
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f2_1', 'label' => '1', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'f2_2', 'label' => '2', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
		</div>
	</fieldset>


	<fieldset>
		<legend>Predict the winner</legend>
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@include('entry._team_selector', array('name' => 'winner', 'label' => ' ', 'teams' => Entry::getAllTeams()))
				</div>
			</div>
		</div>
	</fieldset>

	<div class="row" style="padding-top: 20px;">
		<div class="col-sm-6 col-md-6">
			<div class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-8">
						{{ Form::submit('Save predictions', array ('class' => 'btn btn-primary')) }} 
					</div>
				</div>
			</div>
		</div>
	</div>

	{{ Form::close() }}


@stop