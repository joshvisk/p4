@extends('layouts.master')

@section('content')
<div>
    @foreach($beers as $beer)
        <h4>{!! $beer->beer_name !!}</h4><br />
    @endforeach
</div>
@stop