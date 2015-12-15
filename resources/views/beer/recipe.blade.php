@extends('layouts.master')
@section('content')
	<h1>{!! $beer->beer_name !!}<a href="/beer/recipe/edit/{{ $beer->id }}" class="btn btn-info">Edit</a></h1>
    <h4>Ingredients:</h4>
    <div>
    	<p><b>Grains</b></p>
        @foreach($beer->recipes as $item)
            @if($item->type === 1) <!--check if grain-->
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->id === $item->ingredient_id) <!--grabbing ingredient name-->
            			<p>{!! $item->amt !!} {{  $item->measure }} <i>{{ $ingredient->name }}</i></p>
                    @endif
                @endforeach
            @endif
        @endforeach
    	<p><b>Hops</b></p>
        @foreach($beer->recipes as $item)
            @if($item->type === 2) <!--check if grain-->
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->id === $item->ingredient_id) <!--grabbing ingredient name-->
            			<p>{!! $item->amt !!} {{  $item->measure }} <i>{{ $ingredient->name }}</i></p>
                    @endif
                @endforeach
            @endif
        @endforeach
     	<p><b>Yeast</b></p>
        @foreach($beer->recipes as $item)
            @if($item->type === 3) <!--check if grain-->
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->id === $item->ingredient_id) <!--grabbing ingredient name-->
            			<p>{!! $item->amt !!} {{  $item->measure }} <i>{{ $ingredient->name }}</i></p>
                    @endif
                @endforeach
            @endif
        @endforeach
    	<p><b>Sugar</b></p>
        @foreach($beer->recipes as $item)
            @if($item->type === 1) <!--check if grain-->
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->id === $item->ingredient_id) <!--grabbing ingredient name-->
            			<p>{!! $item->amt !!} {{  $item->measure }} <i>{{ $ingredient->name }}</i></p>
                    @endif
                @endforeach
            @endif
        @endforeach
    	<p><b>Additives</b></p>
         @foreach($beer->recipes as $item)
            @if($item->type === 5) <!--check if grain-->
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->id === $item->ingredient_id) <!--grabbing ingredient name-->
            			<p>{!! $item->amt !!} {{  $item->measure }} <i>{{ $ingredient->name }}</i></p>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
    <div>
    	<h4>Directions</h4>
        {{  $beer->directions }}
    </div>
@stop