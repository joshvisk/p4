@extends('layouts.master')

@section('content')

    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(array('url' => '/register')) !!}
        {!! Form::token() !!}
    
        <div class='form-group'>
            {!! Form::label('first_name', 'First Name', array('class' => 'awesome')) !!}<br />
            {!! Form::text('first_name', "", array('Required')) !!}<br /><br />
            {!! Form::label('last_name', 'Last Name', array('class' => 'awesome')) !!}<br />
            {!! Form::text('last_name', "", array('Required')) !!}<br /><br />
            {!! Form::label('username', 'Username', array('class' => 'awesome')) !!}<br />
            {!! Form::text('username', "", array('Required')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('email', 'E-Mail Address', array('class' => 'awesome')) !!}<br />
            {!! Form::text('email', 'example@gmail.com') !!}<br /><br />
        </div>    
        <div class='form-group'>
            {!! Form::label('password', 'Password', array('class' => 'awesome')) !!}<br />
            {!! Form::password('password') !!}<br /><br />
        </div>    
        <div class='form-group'>
            {!! Form::label('password_confirmation', 'Confirm Password', array('class' => 'awesome')) !!}<br />
            {!! Form::password('password_confirmation') !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('phone', 'Phone Number', array('class' => 'awesome')) !!}<br />
            {!! Form::text('phone', '2065551234') !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('streetAddress', ' Street Address', array('class' => 'awesome')) !!}<br />
            {!! Form::text('streetAddress') !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('city', 'City', array('class' => 'awesome')) !!}<br />
            {!! Form::text('city') !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('state', 'State', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach ($states as $state)
                    <option>{{ $state->state }}</option>
                @endforeach
            </select><br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('zip', 'Zip Code', array('class' => 'awesome')) !!}<br />
            {!! Form::text('zip') !!}<br /><br />   
        </div>
       	{!! Form::submit('Register', array('class' => 'btn btn-primary')) !!}

        <!--<button type='submit' class='btn btn-primary'>Register</button>-->    
	{!! Form::close() !!}

@stop