@foreach($beers as $beer)
	@if($beer->public == true && $beer->user_id != Auth::id())
        <div>
            <hr>
                <div>
                	<div>{!! $beer->beer_name !!}</div>
                    	<a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a>
                </div>
        </div>
    @endif
@endforeach