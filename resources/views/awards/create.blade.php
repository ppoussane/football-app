@extends ('layouts.dashboard')

@section ('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('awards.store') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Playe Name</th>
                                <th>Club</th>
                                <th>Season</th>
                                <th>Prize</th>
                                <th>Management</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($awards as $award)
                                <tr>
                                    <td>{{ $award->id }}</td>
                                    <td>{{ $award->player->name }}</td>
                                    <td>{{ $award->club->name }}</td>
                                    <td>{{ $award->season->name }}</td>
                                    <td>{{ $award->prize->name }}</td>
                                    <td>
                                        <a href="{{ route('awards.edit', $award->id) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
                            <label for="prize_id" class="control-label">Select Prize</label>
                            <select class="form-control" id="prize_id" name="prize_id">

                                @foreach ($prizes as $prize)

                                    <option value='{{ $prize->id }}'>{{ $prize->name }}</option>

                                @endforeach

                            </select>
                        </div>

                        <button type="submit" class="btn btn-default btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection