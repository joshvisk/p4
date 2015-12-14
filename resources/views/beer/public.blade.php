<table>
    @foreach($beers as $beer)
        @if($beer->public == true && $beer->user_id != Auth::id())
        	<tr>
                <td>
                    {!! $beer->beer_name !!}
                </td>
                <td>
                    {!! $beer->user->username !!}
                </td>
                <td>
                    <a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a>
                </td>
            </tr>            
            @endif
    @endforeach
</table>
<!--
            <div>
                <hr>
                <div>
                    <div>{!! $beer->beer_name !!}</div>
                    <a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a>
                </div>
            </div>-->