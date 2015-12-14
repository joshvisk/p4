@if(Auth::check())
    @foreach($beers as $beer)
        @if($beer->user_id == Auth::id())
            <div>
                <hr>
                <div>{!! $beer->beer_name !!}</div>
                <div>
                    <a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a>
                    <a href="/beer/recipe/edit/{{ $beer->id }}" class="btn btn-info">Edit</a>
                    <a href="/beer/delete/{{ $beer->id }}" class="btn btn-info">Delete</a>
                </div>
            </div>
        @endif    
    @endforeach
@else
	<p>You cannot view personal recipes until you are logged in.</p>
@endif