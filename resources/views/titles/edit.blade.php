@extends ('layouts.dashboard')

@section ('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('titles.update', $title) }}">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h3>Title Edit Page</h3>
                    </div>

                    <div class="col-md-2 col-md-offset-1">
                        <div class="form-group">
                            <label for="player_id" class="control-label">Select Player</label>
                            <select class="form-control" id="player_id" name="player_id">

                                @foreach ($players as $player)

                                    <option value='{{ $player->id }}'>{{ $player->name }}</option>

                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="club_id" class="control-label">Select Club</label>
                            <select class="form-control" id="club_id" name="club_id">

                                @foreach ($clubs as $club)

                                    <option value='{{ $club->id }}'>{{ $club->name }}</option>

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
                            <label for="cup_id" class="control-label">Select Cup</label>
                            <select class="form-control" id="cup_id" name="cup_id">

                                @foreach ($cups as $cup)

                                    <option value='{{ $cup->id }}'>{{ $cup->name }}</option>

                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="date" class="form-control" id="year" placeholder="Enter Year Here" name="year" value="{{ old('year', $title->year) }}">
                        </div>

                        <button type="submit" class="btn btn-default btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection