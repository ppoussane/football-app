@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Season Edit</h1>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form action="{{ route('seasons.update', $season->id) }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Season Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Season Title Here" name="name" value="{{ old ('name', $season->name) }}">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection