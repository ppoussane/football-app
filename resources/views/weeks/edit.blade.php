@extends ('layouts.dashboard')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Edit Match Day</h1>
            </div>

            <div class="col-md-3">
                <form action="{{ route('weeks.update', $week) }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Week Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Week Here" name="name" value="{{ old('name', $week->name) }}">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection