@extends('layouts.master')

@section('content')
<div>
    @foreach($beers as $beer)
		<hr>
        {!! $beer->beer_name !!}<a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a><br>
    @endforeach
</div>
@stop