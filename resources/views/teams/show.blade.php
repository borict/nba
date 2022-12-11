<h1>{{$team->name}}</h1>
<h4>Info:</h4>
<p>{{$team->adress}}</p>
<p>{{$team->city}}</p>
<p>{{$team->email}}</p>
@foreach ($team->players as $player)
<li>
    <strong> <a href="{{ route('single-player', ['id' => $player->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a></strong>
</li>
@endforeach

