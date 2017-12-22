@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Host</td>
                        <td>Guest</td>
                        <td>Day</td>
                        <td>Time And Result</td>
                        <td>Management</td>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <td>{{ $game->id }}</td>
                                <td>{{ $game->host }}</td>
                                <td>{{ $game->guest }}</td>
                                <td>{{ $game->day }}</td>
                                <td>{{ $game->timeResult }}</td>
                                <td>
                                    <a href="{{ route('games.edit', $game) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $game->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                    <form id="delete-post-{{ $game->id }}" action="{{ route('games.destroy', $game) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-3">
                <form action="{{ Route('games.store') }}" method="POST">
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
                        <input type="host" class="form-control" id="host" placeholder="Enter Host Here" name="host">
                    </div>

                    <div class="form-group">
                        <label for="guest">Guest:</label>
                        <input type="guest" class="form-control" id="guest" placeholder="Enter Guest Here" name="guest">
                    </div>

                    <div class="form-group">
                        <label for="day">Game Date:</label>
                        <input type="day" class="form-control" id="day" placeholder="Enter Game Date Here" name="day">
                    </div>

                    <div class="form-group">
                        <label for="timeResult">Game Time And Result:</label>
                        <input type="timeResult" class="form-control" id="timeResult" placeholder="Enter timeResult Here" name="timeResult">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection