@extends('layouts.master')
@section('content')
    {!! Form::open(array('url' => '/beer')) !!}
		{!! Form::token() !!}
        <div class='form-group'>
            {!! Form::label('beer_name', 'Name of Beer', array('class' => 'awesome')) !!}<br />
            {!! Form::text('beer_name', "", array('Required')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('grains', 'Grains', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 1)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>
            <!--{!! Form::label('grain_amt', 'Amount', array('class' => 'awesome')) !!}<br />-->
            {!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 1)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 1)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 1)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 1)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('hops', 'Hops', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 2)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 2)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 2)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 2)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 2)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('yeasts', 'Yeast', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 3)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select><br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('sugar', 'Sugar', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 4)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 4)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 4)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
             <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 4)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 4)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 4)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('additive', 'Additive', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 5)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 5)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 5)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 5)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 5)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($ingredients as $ingredient)
                	@if($ingredient->type === 5)
	                    <option>{{ $ingredient->name }}</option>
                    @endif
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        {!! Form::submit('Save Recipe', array('class' => 'btn btn-primary')) !!}

	{!! Form::close() !!}
@stop