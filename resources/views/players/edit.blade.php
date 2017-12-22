@extends ('layouts.dashboard')

@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ Storage::url($player->image) }}" alt="{{ $player->name }}" style="width:50px; height:50px">
            </div>

            <div class="col-md-2 col-md-offset-1">
                <form action="{{ Route('players.update', $player) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Player Name:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter League Title Here" name="name" autofocus value="{{ old('name', $player->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="nicName">Player Nic Name:</label>
                        <input type="nicName" class="form-control" id="nicName" placeholder="Enter Player Nic Name Here" name="nicName" value="{{ old('nicName', $player->nicName) }}">
                    </div>

                    <div class="form-group">
                        <label for="country_id" class="control-label">Select Country</label>
                        <select class="form-control" id="country_id" name="country_id">

                            @foreach ($countries as $country)

                                <option value='{{ old('id', $country->id) }}'>{{ $country->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="height">Player Height:</label>
                        <input type="height" class="form-control" id="height" placeholder="Enter Player Height Here" name="height" value="{{ old('height', $player->height) }}">
                    </div>

                    <div class="form-group">
                        <label for="position">Player Position:</label>
                        <input type="position" class="form-control" id="position" placeholder="Enter Player Position Here" name="position" value="{{ old('position', $player->position) }}">
                    </div>

                    <div class="form-group">
                        <label for="birthDate">Player Birth Date:</label>
                        <input type="date" class="form-control" id="birthDate" placeholder="Enter Player Birth Date Here" name="birthDate" value="{{ old('birthDate', $player->birthDate) }}">
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