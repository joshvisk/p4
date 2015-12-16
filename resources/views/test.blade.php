@extends('layouts.master')
@section('header')
    {!! Html::script("js/hidefields.js") !!}
@stop
@section('content')
<form id="form1" name="form1" method="post" class="form-inline">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
		<legend>Name</legend>
        <div  class="form-horizontal">
        	<label for="beer_name">Beer Name</label>
            <input name"beer_name" id="beer_name" type="text" class="col-xs-3">
        </div>
        <div class="radio-inline">
            <label class="radio-inline">
                <input type="radio" name="personal" id="inlineRadio1" value="true"> Public
            </label>
            <label class="radio-inline">
                <input type="radio" name="personal" id="inlineRadio2" value="false"> Private
            </label>
        </div>        
    </fieldset>
    <fieldset>
    	<legend>Grains</legend>
    	<div id="grain1">
        	<select name="grain1" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 1)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
            </select>
            <input name="grainAmt1" type="text" class="form-control" placeholder="Amount">
        	<select name="grainMeasure1" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div id="grain2">
        	<select name="grain2" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 1)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="grainAmt2" type="text" class="form-control" placeholder="Amount">
        	<select name="grainMeasure2" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div id="grain3">
        	<select name="grain3" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 1)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="grainAmt3" type="text" class="form-control" placeholder="Amount">
        	<select name="grainMeasure3" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div id="grain4">
        	<select name="grain4" class="form-control">
             	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 1)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="grainAmt4" type="text" class="form-control" placeholder="Amount">
        	<select name="grainMeasure4" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div id="grain5">
        	<select name="grain5" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 1)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="grainAmt5" type="text" class="form-control" placeholder="Amount">
        	<select name="grainMeasure5" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    </fieldset>
    <fieldset>
    	<legend>Hops</legend>
    	<div>
        	<select name="hops1" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 2)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="hopsAmt1" type="text" class="form-control" placeholder="Amount">
        	<select name="hopsMeasure1" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="hops2" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 2)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="hopsAmt2" type="text" class="form-control" placeholder="Amount">
        	<select name="hopsMeasure2" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="hops3" class="form-control">
             	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 2)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="hopsAmt3" type="text" class="form-control" placeholder="Amount">
        	<select name="hopsMeasure3" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="hops4" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 2)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="hopsAmt4" type="text" class="form-control" placeholder="Amount">
        	<select name="hopsMeasure4" class="form-control">
                 <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="hops5" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 2)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="hopsAmt5" type="text" class="form-control" placeholder="Amount">
        	<select name="hopsMeasure5" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    </fieldset>  
    <fieldset>
    	<legend>Yeast</legend>
    	<div>
        	<select name="yeast" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 3)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="yeastAmt" type="text" class="form-control" placeholder="Amount">
        	<select name="yeastMeasure" class="form-control">
                <option value="oz">oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbps</option>
                <option value="package" selected>package</option>
			</select>
        </div>
    </fieldset>    
    <fieldset>
    	<legend>Sugar</legend>
    	<div>
        	<select name="sugar1" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 4)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="sugarAmt1" type="text" class="form-control" placeholder="Amount">
        	<select name="sugarMeasure1" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="sugar2" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 4)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="sugarAmt2" type="text" class="form-control" placeholder="Amount">
        	<select name="sugarMeasure2" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="sugar3" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 4)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="sugarAmt3" type="text" class="form-control" placeholder="Amount">
        	<select name="sugarMeasure3" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="sugar4" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 4)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="sugarAmt4" type="text" class="form-control" placeholder="Amount">
        	<select name="sugarMeasure4" class="form-control">
                 <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="sugar5" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 4)
 	                    <option>{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="sugarAmt5" type="text" class="form-control" placeholder="Amount">
        	<select name="sugarMeasure5" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    </fieldset>    
    <fieldset>
    	<legend>Additives</legend>
    	<div>
        	<select name="additive1" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 5)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="additiveAmt1" type="text" class="form-control" placeholder="Amount">
        	<select name="additiveMeasure1" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="additive2" class="form-control">
             	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 5)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="additiveAmt2" type="text" class="form-control" placeholder="Amount">
        	<select name="additiveMeasure2" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="additive3" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 5)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="additiveAmt3" type="text" class="form-control" placeholder="Amount">
        	<select name="additiveMeasure3" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="additive4" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 5)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="additiveAmt4" type="text" class="form-control" placeholder="Amount">
        	<select name="additiveMeasure4" class="form-control">
                 <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    	<div>
        	<select name="additive5" class="form-control">
            	@foreach($ingredients as $ingredient)
                	@if($ingredient->type === 0 || $ingredient->type === 5)
 	                    <option value"{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endif
				@endforeach
			</select>
            <input name="additiveAmt5" type="text" class="form-control" placeholder="Amount">
        	<select name="additiveMeasure5" class="form-control">
                <option value="oz" selected>oz</option>
                <option value="tsp">tsp</option>
                <option value="tbsp">tbsp</option>
                <option value="package">package</option>
			</select>
        </div>
    </fieldset>    
<fieldset>
	<legend>Directions</legend>
	<textarea class="form-control" rows="10"></textarea>
</fieldset>
	<button type="submit" class="btn btn-primary">Create Recipe</button>
</form>

@stop