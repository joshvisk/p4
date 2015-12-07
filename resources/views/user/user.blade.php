@extends('layouts.master')

{!! Form::open(array('url' => '/user')) !!}

	{!! Form::token() !!}
	{!! Form::label('first_name', 'First Name', array('class' => 'awesome')) !!}<br />
    {!! Form::text('first_name', "", array('Required')) !!}<br /><br />
    {!! Form::label('last_name', 'Last Name', array('class' => 'awesome')) !!}<br />
    {!! Form::text('last_name', "", array('Required')) !!}<br /><br />
    {!! Form::label('username', 'Username', array('class' => 'awesome')) !!}<br />
    {!! Form::text('username', "", array('Required')) !!}<br /><br />
	{!! Form::label('password', 'Password', array('class' => 'awesome')) !!}<br />
    {!! Form::password('password') !!}<br /><br />
    {!! Form::label('email', 'E-Mail Address', array('class' => 'awesome')) !!}<br />
    {!! Form::text('email', 'example@gmail.com') !!}<br /><br />
    {!! Form::label('phone', 'Phone Number', array('class' => 'awesome')) !!}<br />
    {!! Form::text('phone', '2065551234') !!}<br /><br />
    {!! Form::label('streetAddress', ' Street Address', array('class' => 'awesome')) !!}<br />
    {!! Form::text('streetAddress') !!}<br /><br />
    {!! Form::label('city', 'City', array('class' => 'awesome')) !!}<br />
    {!! Form::text('city') !!}<br /><br />
    {!! Form::label('state', 'State', array('class' => 'awesome')) !!}<br />
    <select>
    	@foreach ($states as $state)
        	<option>{{ $state->state }}</option>
        @endforeach
    </select><br /><br />
    {!! Form::label('zip', 'Zip Code', array('class' => 'awesome')) !!}<br />
    {!! Form::text('zip') !!}<br /><br />
    
	{!! Form::submit('Register') !!}
    
{!! Form::close() !!}

