@extends('layouts.master')

@section('content')

    <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <h1>Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/login'>

        {!! csrf_field() !!}

		<div class='form-group'>
            {!! Form::label('username', 'Username') !!}<br />
            {!! Form::text('username', "") !!}<br /><br />
        </div>

        <div class='form-group'>
            {!! Form::label('password', 'Password') !!}<br />
            {!! Form::password('password') !!}<br /><br />
        </div> 

        <div class='form-group'>
            {!! Form::checkbox('remember', 1, null, ['class' => 'checkboxLabel', 'id' => 'remember']) !!}
            {!! Form::label('remember', 'Remember Me', array('class' => 'checkboxLabel')) !!}
        </div>

        <button type='submit' class='btn btn-primary'>Login</button>

    </form>
@stop