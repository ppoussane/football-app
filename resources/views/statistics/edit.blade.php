@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h1>Statistics Edit Page</h1>
            </div>

            <div class="col-md-2 col-md-offset-1">
                <form action="{{ Route('statistics.update', $statistic->id) }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="club_id" class="control-label">Select Club</label>
                        <select class="form-control" id="club_id" name="club_id">

                            @foreach ($clubs as $club)

                                <option value='{{ $club->id }}'>{{ $club->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="week_id" class="control-label">Select Week</label>
                        <select class="form-control" id="week_id" name="week_id">

                            @foreach ($weeks as $week)

                                <option value='{{ $week->id }}'>{{ $week->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="season_id" class="control-label">Select Season</label>
                        <select class="form-control" id="season_id" name="season_id">

                            @foreach ($seasons as $season)

                                <option value='{{ $season->id }}'>{{ $season->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="league_id" class="control-label">Select League</label>
                        <select class="form-control" id="league_id" name="league_id">

                            @foreach ($leagues as $league)

                                <option value='{{ $league->id }}'>{{ $league->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="game">Games:</label>
                        <input type="number" class="form-control" id="game" placeholder="Enter Goals Here" name="game" value="{{ old('game', $statistic->game) }}">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection