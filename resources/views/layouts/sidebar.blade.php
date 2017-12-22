<link href="{{ asset('css/mine.css') }}" rel="stylesheet">
<div class="col-md-3">
    <h4>
        <b>
            <div class="form-group">
                @foreach ($weeks as $week)
                    @if($weeks->last() === $week)
                        {{ $week->name }}
                    @endif
                @endforeach
            </div>
        </b>
    </h4>
    <table class="table table-hover" id="table-game">
        <tbody>
        @foreach ($games as $game)
            <tr>
                <td class="text-center"><small>{{ $game->host }}</small></td>
                <td>
                    <div class="text-center" id="time-set">{{ $game->timeResult }}</div>
                    <div class="text-center" id="day-set"><small>{{ $game->day }}</small></div>
                </td>
                <td class="text-center"><small>{{ $game->guest }}</small></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table table-hover" id="table-standings">
        <thead>
        <tr>
            <th>#</th>
            <th>{{ __('words.team') }}</th>
            <th>{{ __('words.game') }}</th>
            <th>{{ __('words.points') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($standings as $standing)
            <tr>
                <td>{{ $standing->level }}</td>
                <td>{{ $standing->club->name }}</td>
                <td>{{ $standing->game }}</td>
                <td>{{ $standing->point }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>