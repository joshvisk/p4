@extends('layouts.master')
@if($beer->user_id == Auth::id())
    @section('content')    
        <h1>Edit Recipe</h1>
        
         <form id="recipeform" name="recipeform" method="post" class="form-inline" action="/beer/recipe/edit">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type='hidden' name='id' value='{{ $beer->id }}'>
            <fieldset>
                <legend>Name</legend>
                <div>
                    <label for="beer_name">Beer Name</label>
                    <input name="beer_name" id="beer_name" type="text" value="{{ $beer->beer_name }}">
                </div>
                <div class="radio-inline">
                    {{ $checked1 = ($beer->public == 0) ? "checked" : '' }}
                    {{ $checked2 = ($beer->public == 1) ? "checked" : '' }}
                    <label class="radio-inline">
                        <input type="radio" name="personal" id="inlineRadio1" value="0" {{ $checked1 }}> Public
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="personal" id="inlineRadio2" value="1" {{ $checked2 }}> Private
                    </label>
                </div>        
            </fieldset>
            <fieldset>
                <legend>Grains</legend>
                <div id="grain1" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'grain1')
                            <input type='hidden' name='grainID1' value='{{ $item->id }}'>
                            <select name="grain1" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 1)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="grainAmt1" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="grainMeasure1" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>    	
                        @endif
                    @endforeach
                </div>
                <div id="grain2" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'grain2')                
                            <input type='hidden' name='grainID2' value='{{ $item->id }}'>
                            <select name="grain2" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 1)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="grainAmt2" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="grainMeasure2" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="grain3" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'grain3')                
                            <input type='hidden' name='grainID3' value='{{ $item->id }}'>
                            <select name="grain3" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 1)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="grainAmt3" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="grainMeasure3" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="grain4" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'grain4')                
                            <input type='hidden' name='grainID4' value='{{ $item->id }}'>
                            <select name="grain4" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 1)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="grainAmt4" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="grainMeasure4" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="grain5" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'grain5')                
                            <input type='hidden' name='grainID5' value='{{ $item->id }}'>
                            <select name="grain5" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 1)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="grainAmt5" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="grainMeasure5" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
            </fieldset>
            <fieldset>
                <legend>Hops</legend>
                <div id="hops1" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'hops1')                
                            <input type='hidden' name='hopsID1' value='{{ $item->id }}'>
                            <select name="hops1" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 2)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="hopsAmt1" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="hopsMeasure1" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="hops2" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'hops2')                
                            <input type='hidden' name='hopsID2' value='{{ $item->id }}'>
                            <select name="hops2" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 2)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="hopsAmt2" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="hopsMeasure2" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="hops3" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'hops3')                
                            <input type='hidden' name='hopsID3' value='{{ $item->id }}'>
                            <select name="hops3" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 2)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="hopsAmt3" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="hopsMeasure3" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="hops4" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'hops4')                
                            <input type='hidden' name='hopsID4' value='{{ $item->id }}'>
                            <select name="hops4" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 2)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="hopsAmt4" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="hopsMeasure4" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="hops5" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'hops5')                
                            <input type='hidden' name='hopsID5' value='{{ $item->id }}'>
                            <select name="hops5" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 2)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="hopsAmt5" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="hopsMeasure5" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
            </fieldset>  
            <fieldset>
                <legend>Yeast</legend>
                <div id="yeast" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'yeast')                
                            <input type='hidden' name='yeastID' value='{{ $item->id }}'>
                            <select name="yeast" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 3)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="yeastAmt" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="yeastMeasure" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
            </fieldset>    
            <fieldset>
                <legend>Sugar</legend>
                <div id="sugar1" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'sugar1')                
                            <input type='hidden' name='sugarID1' value='{{ $item->id }}'>
                            <select name="sugar1" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 4)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="sugarAmt1" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="sugarMeasure1" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="sugar2" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'sugar2')                
                            <input type='hidden' name='sugarID2' value='{{ $item->id }}'>
                            <select name="sugar2" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 4)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="sugarAmt2" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="sugarMeasure2" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="sugar3" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'sugar3')                
                            <input type='hidden' name='sugarID3' value='{{ $item->id }}'>
                            <select name="sugar3" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 4)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="sugarAmt3" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="sugarMeasure3" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="sugar4" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'sugar4')                
                            <input type='hidden' name='sugarID4' value='{{ $item->id }}'>
                            <select name="sugar4" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 4)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="sugarAmt4" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="sugarMeasure4" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="sugar5" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'sugar5')                
                            <input type='hidden' name='sugarID5' value='{{ $item->id }}'>
                            <select name="sugar5" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 4)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="sugarAmt5" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="sugarMeasure5" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
            </fieldset>    
            <fieldset>
                <legend>Additives</legend>
                <div id="additive1" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'additive1')                
                            <input type='hidden' name='additiveID1' value='{{ $item->id }}'>
                            <select name="additive1" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 5)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="additiveAmt1" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="additiveMeasure1" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="additive2" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'additive2')                
                            <input type='hidden' name='additiveID2' value='{{ $item->id }}'>
                            <select name="additive2" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 5)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="additiveAmt2" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="additiveMeasure2" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="additive3" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'additive3')                
                            <input type='hidden' name='additiveID3' value='{{ $item->id }}'>
                            <select name="additive3" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 5)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="additiveAmt3" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="additiveMeasure3" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="additive4" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'additive4')                
                            <input type='hidden' name='additiveID4' value='{{ $item->id }}'>
                            <select name="additive4" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 5)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="additiveAmt4" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="additiveMeasure4" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
                <div id="additive5" class="form-group">
                    @foreach($beer->recipe as $item)
                        @if($item->order == 'additive5')                
                            <input type='hidden' name='additiveID5' value='{{ $item->id }}'>
                            <select name="additive5" class="form-control">
                                @foreach($ingredients as $ingredient)
                                    @if($ingredient->type === 0 || $ingredient->type === 5)
                                        {{ $selected = ($ingredient->id == $item->ingredient_id) ? 'selected' : '' }}
                                        <option value="{{ $ingredient->id }}" {{ $selected }}>{{ $ingredient->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input name="additiveAmt5" type="text" class="form-control" value="{{ $item->amt }}" placeholder="Amount">
                           <select name="additiveMeasure5" class="form-control">
                                @foreach($measures as $measure)
                                    {{ $selected = ($item->measure === $measure) ? 'selected' : '' }}
                                <option value="{{ $measure }}" {{ $selected }}>{{ $measure }}</option>
                                @endforeach
                            </select>
                        @endif
                    @endforeach
                </div>
            </fieldset>    
        <fieldset>
            <legend>Directions</legend>
            <textarea class="form-control" rows="10" name="directions">{{ $beer->directions }}</textarea>
        </fieldset>
            <button type="submit" class="btn btn-primary">Update Recipe</button>
        </form>
    @stop
@else
    @section('content')
    	<p>You are not auathorized to edit this recipe</p>
	@stop
@endif