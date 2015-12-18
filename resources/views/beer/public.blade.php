<div class="table-responsive">
    <table class="table">
        @foreach($beers as $beer)
            @if($beer->personal == 0)
                <tr>
                    <td>
                        {!! $beer->beer_name !!}
                    </td>
                    <td>
                        {!! $beer->user->username !!}
                    </td>
                    <td class="text-right">
                        <a href="/beer/recipe/{{ $beer->id }}" class="btn btn-info">View</a>
                    </td>
                </tr>            
                @endif
        @endforeach
    </table>
