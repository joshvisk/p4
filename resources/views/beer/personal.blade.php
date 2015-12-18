<div class="table-responsive">
	<table class="table">
		@if(Auth::check())
            @foreach($beers as $beer)
                @if($beer->user_id == Auth::id())
                    <tr>
                        <td>
                            {{ $beer->beer_name }}
                        </td>
                        <td>
                            {{ $beer->user->username }}
                        </td>
                        <td class="text-right">
                            <div>
                                <a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a>
                                <a href="/beer/recipe/edit/{{ $beer->id }}" class="btn btn-info">Edit</a>
                                <a href="/beer/delete/{{ $beer->id }}" class="btn btn-info">Delete</a>
                            </div>
                        </td>
                    </tr>            
                @endif    
            @endforeach
        @else
            <p>You cannot view personal recipes until you are logged in.</p>
            <a href="/login" class="btn btn-info">Login</a>
        @endif
    </table>
</div>