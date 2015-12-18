@extends('layouts.master')
@section('content')
    <div>          
        <h1>Beers</h1>
<!--        <div class="tabs">
            
           <div class="tab">
               <input type="radio" id="tab-1" name="tab-group-1" checked>
               <label for="tab-1">Public</label>
               
               <div class="content">
                   @include('beer.public')
                   <!--Public
               </div> 
           </div>
            
           <div class="tab">
               <input type="radio" id="tab-2" name="tab-group-1">
               <label for="tab-2">Personal</label>
               
               <div class="content">
                  @include('beer.personal')
                  <!--Personal
               </div> 
           </div>
                  
        </div>-->
    <ul class="tabs">
        <li>
            <input type="radio" checked name="tabs" id="tab1">
            <label for="tab1">Public Recipes</label>
            <div id="tab-content1" class="tab-content animated fadeIn">
                @include('beer.public')
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab2">
            <label for="tab2">Personal Recipes</label>
            <div id="tab-content2" class="tab-content animated fadeIn">
				@include('beer.personal')           
            </div>
        </li>
	</ul>
    <!--
        @foreach($beers as $beer)
            <hr>
            {!! $beer->beer_name !!}<a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a><br>
        @endforeach-->
    </div>
@stop