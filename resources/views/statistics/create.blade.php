@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Club Title</th>
                        <th>League</th>
                        <th>Week</th>
                        <th>Season</th>
                        <th>Games</th>
                        <th>Management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($statistics as $statistic)
                        <tr>
                            <td>{{ $statistic->id }}</td>
                            <td>{{ $statistic->club->name }}</td>
                            <td>{{ $statistic->league->name }}</td>
                            <td>{{ $statistic->week->name }}</td>
                            <td>{{ $statistic->season->name }}</td>
                            <td>{{ $statistic->game }}</td>
                            <td>
                                <a href="{{ route('statistics.edit', $statistic) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $statistic->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                <form id="delete-post-{{ $statistic->id }}" action="{{ route('statistics.destroy', $statistic) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-2 col-md-offset-1">
                <form action="{{ Route('statistics.store') }}" method="POST">
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
                        <input type="number" class="form-control" id="game" placeholder="Enter Goals Here" name="game">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection