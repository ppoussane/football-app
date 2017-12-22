@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Level</td>
                        <td>Club</td>
                        <td>Games</td>
                        <td>Win</td>
                        <td>Draw</td>
                        <td>Lose</td>
                        <td>Goals F</td>
                        <td>Goals C</td>
                        <td>Goal A</td>
                        <td>Points</td>
                        <td>Management</td>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($standings as $standing)
                            <tr>
                                <td>{{ $standing->id }}</td>
                                <td>{{ $standing->level }}</td>
                                <td>{{ $standing->club->name }}</td>
                                <td>{{ $standing->game }}</td>
                                <td>{{ $standing->win }}</td>
                                <td>{{ $standing->draw }}</td>
                                <td>{{ $standing->lose }}</td>
                                <td>{{ $standing->goal_f }}</td>
                                <td>{{ $standing->goal_c }}</td>
                                <td>{{ ($standing->goal_f) - ($standing->goal_c) }}</td>
                                <td>{{ $standing->point }}</td>
                                <td>
                                    <a href="{{ route('standings.edit', $standing) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $standing->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                    <form id="delete-post-{{ $standing->id }}" action="{{ route('standings.destroy', $standing) }}" method="POST">
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
                <form action="{{ Route('standings.store') }}" method="POST">
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
                        <label for="level">Level:</label>
                        <input type="level" class="form-control" id="level" placeholder="Enter Level Here" name="level">
                    </div>

                    <div class="form-group">
                        <label for="game">Game:</label>
                        <input type="number" class="form-control" id="game" placeholder="Enter Games" name="game">
                    </div>

                    <div class="form-group">
                        <label for="win">Win:</label>
                        <input type="number" class="form-control" id="win" placeholder="Enter Wins" name="win">
                    </div>

                    <div class="form-group">
                        <label for="draw">Draw:</label>
                        <input type="number" class="form-control" id="draw" placeholder="Enter Draws" name="draw">
                    </div>

                    <div class="form-group">
                        <label for="lose">Lose:</label>
                        <input type="number" class="form-control" id="lose" placeholder="Enter Loses" name="lose">
                    </div>

                    <div class="form-group">
                        <label for="goal_f">Goals F:</label>
                        <input type="number" class="form-control" id="goal_f" placeholder="Enter Goals F" name="goal_f">
                    </div>

                    <div class="form-group">
                        <label for="goal_c">Goals C:</label>
                        <input type="number" class="form-control" id="goal_c" placeholder="Enter Goal C" name="goal_c">
                    </div>

                    <div class="form-group">
                        <label for="point">Points:</label>
                        <input type="number" class="form-control" id="point" placeholder="Enter Points" name="point">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection