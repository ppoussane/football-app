@extends ('layouts.dashboard')

@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Nic Name</th>
                        <th>Image</th>
                        <th>Height</th>
                        <th>Position</th>
                        <th>Birth Date</th>
                        <th>Management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->nicName }}</td>
                            <td><img src="{{ Storage::url($player->image) }}" alt="{{ $player->name }}" style="width:50px; height:50px"></td>
                            <td>{{ $player->height }}</td>
                            <td>{{ $player->position }}</td>
                            <td>{{ $player->birthDate }}</td>
                            <td>
                                <a href="{{ route('players.show', $player) }}" class="btn btn-primary" role="button"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                <a href="{{ route('players.edit', $player->id) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onClick="event.preventDefault();document.getElementById('delete-post-{{ $player->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                <form id="delete-post-{{ $player->id }}" action="{{ route('players.destroy', $player) }}" method="POST">
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
                <form action="{{ Route('players.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Player Name:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Player Name Here" name="name" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="nicName">Player Nic Name:</label>
                        <input type="nicName" class="form-control" id="nicName" placeholder="Enter Player Nic Name Here" name="nicName">
                    </div>

                    <div class="form-group">
                        <label for="country_id" class="control-label">Select Country</label>
                        <select class="form-control" id="country_id" name="country_id">

                            @foreach ($countries as $country)

                                <option value='{{ $country->id }}'>{{ $country->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="height">Player Height:</label>
                        <input type="height" class="form-control" id="height" placeholder="Enter Player Height Here" name="height">
                    </div>

                    <div class="form-group">
                        <label for="position">Player Position:</label>
                        <input type="position" class="form-control" id="position" placeholder="Enter Player Position Here" name="position">
                    </div>

                    <div class="form-group">
                        <label for="birthDate">Player Birth Date:</label>
                        <input type="date" class="form-control" id="birthDate" placeholder="Enter Player Birth Date Here" name="birthDate">
                    </div>

                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image" class="control-label">Image</label>
                        <input id="image" type="file" accept="image/*" class="form-control" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
