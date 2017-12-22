@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ Storage::url($club->image) }}" alt="{{ $club->name }}" style="width:50px; height:50px">
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Club Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Club Title Here" name="name"  value="{{ old ('name', $club->name) }}" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="manager">Manager Title:</label>
                        <input type="manager" class="form-control" id="manager" placeholder="Enter Manager Title Here" name="manager" value="{{ old ('manager', $club->manager) }}">
                    </div>

                    <div class="form-group">
                        <label for="chairman">Chairman Title:</label>
                        <input type="chairman" class="form-control" id="chairman" placeholder="Enter Chairman Title Here" name="chairman" value="{{ old ('chairman', $club->chairman) }}">
                    </div>

                    <div class="form-group">
                        <label for="found">Found:</label>
                        <input type="date" class="form-control" id="found" placeholder="Enter Found Title Here" name="found" value="{{ old ('found', $club->found) }}">
                    </div>

                    <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="website" class="form-control" id="website" placeholder="Enter Website Title Here" name="website" value="{{ old ('website', $club->website) }}">
                    </div>

                    <div class="form-group">
                        <label for="country_id" class="control-label">Select Country</label>
                        <select class="form-control" id="country_id" name="country_id">

                            @foreach ($countries as $country)

                                <option value='{{ $country->id }}'>{{ $country->name }}</option>

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