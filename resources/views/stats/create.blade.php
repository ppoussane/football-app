@extends ('layouts.dashboard')

@section ('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('stats.store') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Selections</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="player_id" class="control-label col-md-1">Select Player</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="player_id" name="player_id">

                                        @foreach ($players as $player)

                                            <option value='{{ $player->id }}'>{{ $player->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="league_id" class="control-label col-md-1">Select League</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="league_id" name="league_id">

                                        @foreach ($leagues as $league)

                                            <option value='{{ $league->id }}'>{{ $league->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="club_id" class="control-label col-md-1">Select Club</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="club_id" name="club_id">

                                        @foreach ($clubs as $club)

                                            <option value='{{ $club->id }}'>{{ $club->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="season_id" class="control-label col-md-1">Select Season</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="season_id" name="season_id">

                                        @foreach ($seasons as $season)

                                            <option value='{{ $season->id }}'>{{ $season->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="week_id" class="control-label col-md-1">Select Week</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="week_id" name="week_id">

                                        @foreach ($weeks as $week)

                                            <option value='{{ $week->id }}'>{{ $week->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Goals</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="goal" class="control-label col-md-1">Goal:</label>
                                <div class="col-md-2">
                                    <input type="integer" class="form-control" id="goal" placeholder="Player Goals" name="goal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="head_goal" class="control-label col-md-1">Head Goal:</label>
                                <div class="col-md-2">
                                    <input type="integer" class="form-control" id="head_goal" placeholder="Player Head Goals" name="head_goal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="penalty_goal" class="control-label col-md-1">Penalty Goal:</label>
                                <div class="col-md-2">
                                    <input type="integer" class="form-control" id="penalty_goal" placeholder="Player penalty Goals" name="penalty_goal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="right_foot_goal" class="control-label col-md-1">Right Foot Goal:</label>
                                <div class="col-md-2">
                                    <input type="integer" class="form-control" id="right_foot_goal" placeholder="Player Right Foot Goals" name="right_foot_goal">
                                </div>
                            </div>

                            <div class="form-group">

                                <label for="left_foot_goal" class="control-label col-md-1">Left Foot Goal:</label>
                                <div class="col-md-2">
                                    <input type="integer" class="form-control" id="left_foot_goal" placeholder="Player Left Foot Goals" name="left_foot_goal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Card</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="yellow_card">Yellow Card:</label>
                                <input type="integer" class="form-control" id="yellow_card" placeholder="Player Yellow Cards" name="yellow_card">
                            </div>

                            <div class="form-group">
                                <label for="red_card">Red Card:</label>
                                <input type="integer" class="form-control" id="red_card" placeholder="Player Red Cards" name="red_card">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Fault</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="faults_committed">Faults Committed:</label>
                                <input type="integer" class="form-control" id="faults_committed" placeholder="Faults Committed" name="faults_committed">
                            </div>

                            <div class="form-group">
                                <label for="faults_won">Faults Won:</label>
                                <input type="integer" class="form-control" id="faults_won" placeholder="Faults Won" name="faults_won">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Ball</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="ball_recovered">Ball Recovered:</label>
                                <input type="integer" class="form-control" id="ball_recovered" placeholder="Ball Recovered" name="ball_recovered">
                            </div>

                            <div class="form-group">
                                <label for="ball_given_away">Ball Given Away:</label>
                                <input type="integer" class="form-control" id="ball_given_away" placeholder="Ball Given Away" name="ball_given_away">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Other</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="dribble">Dribble:</label>
                                <input type="integer" class="form-control" id="dribble" placeholder="Dribble" name="dribble">
                            </div>

                            <div class="form-group">
                                <label for="pass">Pass:</label>
                                <input type="integer" class="form-control" id="pass" placeholder="Pass" name="pass">
                            </div>

                            <div class="form-group">
                                <label for="assist">Assist:</label>
                                <input type="integer" class="form-control" id="assist" placeholder="Assist" name="assist">
                            </div>

                            <div class="form-group">
                                <label for="shot">Shot:</label>
                                <input type="integer" class="form-control" id="shot" placeholder="Shot" name="shot">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
@endsection