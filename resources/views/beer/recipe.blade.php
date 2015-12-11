@extends('layouts.master')
@section('content')
	<h1>{!! $beer->beer_name !!}</h1>
    <h4>Ingredients:</h4>
    <div>
    	<p><b>Grains</b></p>
        @foreach($ingredients as $ingredient)
            @if($ingredient->type === 1) <!--check if grain-->
            	<p>{!! $ingredient->grain_amt !!} Grain Type</p>
<!--            	@if(key_exists($ingredient->grain, $grains))
                	<p>{!! $grains($ingredient->grain) !!} {!! $ingredient->grain_amt !!}</p>
                @else
                	<p>No Type specified: {!! $ingredient->grain_amt !!}</p>
                @endif-->
            @endif
        @endforeach   		
    </div>
@stop