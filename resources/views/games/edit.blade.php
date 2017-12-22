@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Games Edit Page</h1>
            </div>

            <div class="col-md-3">
                <form action="{{ Route('games.update', $game) }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="week_id" class="control-label">Select Match Day</label>
                        <select class="form-control" id="week_id" name="week_id">

                            @foreach ($weeks as $week)

                                <option value='{{ $week->id }}'>{{ $week->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="host">Host:</label>
                        <input type="host" class="form-control" id="host" placeholder="Enter Host Here" name="host" value="{{ old('host', $game->host) }}">
                    </div>

                    <div class="form-group">
                        <label for="guest">Guest:</label>
                        <input type="guest" class="form-control" id="guest" placeholder="Enter Guest Here" name="guest" value="{{ old('guest', $game->guest) }}">
                    </div>

                    <div class="form-group">
                        <label for="day">Game Date:</label>
                        <input type="day" class="form-control" id="day" placeholder="Enter Game Date Here" name="day"  value="{{ old('day', $game->day) }}">
                    </div>

                    <div class="form-group">
                        <label for="timeResult">Game Time And Result:</label>
                        <input type="timeResult" class="form-control" id="timeResult" placeholder="Enter timeResult Here" name="timeResult"  value="{{ old('timeResult', $game->timeResult) }}">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection