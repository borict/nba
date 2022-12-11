<h1>Player:</h1>
<h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
<strong>Email: {{ $player->email }}</p>
<strong>Team:</strong> <a href="{{ route('single-team', ['id' => $player->team->id]) }}">{{ $player->team->name }}</a></p>

