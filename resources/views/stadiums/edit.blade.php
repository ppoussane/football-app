@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ Storage::url($stadium->image) }}" alt="{{ $stadium->name }}" style="width:300px;">
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form action="{{ route('stadiums.update', $stadium->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Stadium Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Country Title Here" name="name" value="{{ old ('name', $stadium->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="capacity">Capacity Title:</label>
                        <input type="capacity" class="form-control" id="capacity" placeholder="Enter Capacity Title Here" name="capacity" value="{{ old ('capacity', $stadium->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="city">City Title:</label>
                        <input type="city" class="form-control" id="city" placeholder="Enter City Title Here" name="city" value="{{ old ('city', $stadium->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="club_id" class="control-label">Select Club</label>
                        <select class="form-control" id="club_id" name="club_id">

                            @foreach ($clubs as $club)

                                <option value='{{ $club->id }}'>{{ $club->name }}</option>

                            @endforeach

                        </select>
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