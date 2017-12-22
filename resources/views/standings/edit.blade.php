@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h1>Standing Edit Page</h1>
            </div>

            <div class="col-md-2 col-md-offset-1">
                <form action="{{ Route('standings.update', $standing) }}" method="POST">
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
                        <label for="level">Level:</label>
                        <input type="level" class="form-control" id="level" placeholder="Enter Level Here" name="level" value="{{ old('level', $standing->level) }}">
                    </div>

                    <div class="form-group">
                        <label for="game">Game:</label>
                        <input type="number" class="form-control" id="game" placeholder="Enter Games" name="game" value="{{ old('game', $standing->game) }}">
                    </div>

                    <div class="form-group">
                        <label for="win">Win:</label>
                        <input type="number" class="form-control" id="win" placeholder="Enter Wins" name="win" value="{{ old('win', $standing->win) }}">
                    </div>

                    <div class="form-group">
                        <label for="draw">Draw:</label>
                        <input type="number" class="form-control" id="draw" placeholder="Enter Draws" name="draw" value="{{ old('draw', $standing->draw) }}">
                    </div>

                    <div class="form-group">
                        <label for="lose">Lose:</label>
                        <input type="number" class="form-control" id="lose" placeholder="Enter Loses" name="lose" value="{{ old('lose', $standing->lose) }}">
                    </div>

                    <div class="form-group">
                        <label for="goal_f">Goals F:</label>
                        <input type="number" class="form-control" id="goal_f" placeholder="Enter Goals F" name="goal_f" value="{{ old('goal_f', $standing->goal_f) }}">
                    </div>

                    <div class="form-group">
                        <label for="goal_c">Goals C:</label>
                        <input type="number" class="form-control" id="goal_c" placeholder="Enter Goal C" name="goal_c" value="{{ old('goal_c', $standing->goal_c) }}">
                    </div>

                    <div class="form-group">
                        <label for="point">Points:</label>
                        <input type="number" class="form-control" id="point" placeholder="Enter Points" name="point" value="{{ old('point', $standing->point) }}">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection