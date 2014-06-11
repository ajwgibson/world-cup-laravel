
@extends('layouts.default')

@section('content')

	<h1>Create a new Competition entry</h1>

	<div>
		<ul>
			<li>You must use an Asidua email address.</li>
			<li>You can only create one entry for a given email address.</li>
			<li>Once you have created an entry you will be able to fill out your predictions.</li>
			<li>Required fields are marked with an asterisk.</li>
		</ul>
	</div>

	<div class="form-horizontal">

		{{ Form::open(array('action' => 'EntryController@store')) }}

		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		    {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label required')) }}
		    <div class="col-sm-4">
			    {{ Form::text(
			    		'email', null, 
			    		array(
			    			'aria-required' => 'true', 
			    			'class' => 'form-control col-sm-4', 
			    			'maxlength' => 50,
			    			'placeholder' => 'Enter your email address')) }}
				<span class="help-block">Only Asidua emails will be accepted - sorry.</span>
    		</div>	
		</div>

		<div class="form-group {{ $errors->has('secret') ? 'has-error' : '' }}">
		    {{ Form::label('secret', 'Secret', array('class' => 'col-sm-2 control-label required')) }}
		    <div class="col-sm-4">
		    	{{ Form::password(
	    			'secret', 
	    			array(
	    				'aria-required' => 'true', 
	    				'class' => 'form-control col-sm-4', 
	    				'maxlength' => 50,
	    				'placeholder' => 'Enter a secret')) }}
				<span class="help-block">This will be encrypted and stored with your entry so that you can come back and edit your entry later.</span>
			</div>
		</div>

		<div class="form-group {{ $errors->has('secret_confirmation') ? 'has-error' : '' }}">
		    {{ Form::label('secret_confirmation', 'Confirm secret', array('class' => 'col-sm-2 control-label required')) }}
		    <div class="col-sm-4">
		    {{ Form::password(
	    			'secret_confirmation', 
	    			array(
	    				'aria-required' => 'true', 
	    				'class' => 'form-control col-sm-4', 
	    				'maxlength' => 50,
	    				'placeholder' => 'Enter the secret again')) }}
			</div>
		</div>

		<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
		    {{ Form::label('first_name', 'First name', array('class' => 'col-sm-2 control-label required')) }}
		    <div class="col-sm-4">
			    {{ Form::text(
			    		'first_name', null, 
			    		array(
			    			'aria-required' => 'true', 
			    			'class' => 'form-control col-sm-4', 
			    			'maxlength' => 50,
			    			'placeholder' => 'Enter your first name')) }}
    		</div>	
		</div>

		<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
		    {{ Form::label('last_name', 'Last name', array('class' => 'col-sm-2 control-label required')) }}
		    <div class="col-sm-4">
			    {{ Form::text(
			    		'last_name', null, 
			    		array(
			    			'aria-required' => 'true', 
			    			'class' => 'form-control col-sm-4', 
			    			'maxlength' => 50,
			    			'placeholder' => 'Enter your last name')) }}
    		</div>	
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">
		    	{{ Form::submit('Create entry', array ('class' => 'btn btn-primary')) }} 
			</div>
		</div>

		{{ Form::close() }}

	</div>

@stop