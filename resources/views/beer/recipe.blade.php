@extends('layouts.master')
@section('content')
	<h1>{!! $beer->beer_name !!}</h1>
    <h4>Ingredients:</h4>
    <div>
    	<p><b>Grains</b></p>
        @foreach($recipe as $item)
            @if($item->type === 1) <!--check if grain-->
            	<p>{!! $item->grain_amt !!} Grain Type</p>
            @endif
        @endforeach
    	<p><b>Hops</b></p>
        @foreach($recipe as $item)
            @if($item->type === 2) <!--check if hops-->
            	<p>{!! $item->hops_amt !!} Hop Type</p>
            @endif
        @endforeach   		           		
     	<p><b>Yeast</b></p>
        @foreach($recipe as $item)
            @if($item->type === 3) <!--check if Yeast-->
            	<p>{!! $item->yeast_amt !!} Yeast Type</p>
            @endif
        @endforeach   		
    	<p><b>Sugar</b></p>
        @foreach($recipe as $item)
            @if($item->type === 4) <!--check if Sugar-->
            	<p>{!! $item->sugar_amt !!} Sugar Type</p>
            @endif
        @endforeach   		 
    	<p><b>Additives</b></p>
        @foreach($recipe as $item)
            @if($item->type === 5) <!--check if Additives-->
            	<p>{!! $item->additive_amt !!} Additives Type</p>
            @endif
        @endforeach   		
    </div>
@stop