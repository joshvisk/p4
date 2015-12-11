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
                @foreach($grains as $grain)
                    <option>{{ $grain->grain }}</option>
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($grains as $grain)
                    <option>{{ $grain->grain }}</option>
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($grains as $grain)
                    <option>{{ $grain->grain }}</option>
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($grains as $grain)
                    <option>{{ $grain->grain }}</option>
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($grains as $grain)
                    <option>{{ $grain->grain }}</option>
                @endforeach
            </select>{!! Form::text('grain_amt', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('hops', 'Hops', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($hops as $hop)
                    <option>{{ $hop->hops }}</option>
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($hops as $hop)
                    <option>{{ $hop->hops }}</option>
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($hops as $hop)
                    <option>{{ $hop->hops }}</option>
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($hops as $hop)
                    <option>{{ $hop->hops }}</option>
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($hops as $hop)
                    <option>{{ $hop->hops }}</option>
                @endforeach
            </select>{!! Form::text('hops_amt', "", array('class' => 'create_select')) !!}{!! Form::text('hops_type', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('yeasts', 'Yeast', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($yeasts as $yeast)
                    <option>{{ $yeast->yeast }}</option>
                @endforeach
            </select><br /><br />
        </div>
        <div class='form-group'>
            {!! Form::label('additive', 'Additive', array('class' => 'awesome')) !!}<br />
            <select>
                @foreach($additives as $additive)
                    <option>{{ $additive->additive }}</option>
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($additives as $additive)
                    <option>{{ $additive->additive }}</option>
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($additives as $additive)
                    <option>{{ $additive->additive }}</option>
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($additives as $additive)
                    <option>{{ $additive->additive }}</option>
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($additives as $additive)
                    <option>{{ $additive->additive }}</option>
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
            <select>
                @foreach($additives as $additive)
                    <option>{{ $additive->additive }}</option>
                @endforeach
            </select>{!! Form::text('additive_amt', "", array('class' => 'create_select')) !!}{!! Form::text('additive_measure', "", array('class' => 'create_select')) !!}<br /><br />
        </div>
        {!! Form::submit('Save Recipe', array('class' => 'btn btn-primary')) !!}

	{!! Form::close() !!}
@stop