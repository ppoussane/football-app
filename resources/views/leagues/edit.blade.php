@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ Storage::url($league->image) }}" alt="{{ $league->name }}" style="width:300px;">
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form action="{{ route('leagues.update', $league->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">League Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter League Title Here" name="name" value="{{ old ('name', $league->name) }}">
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