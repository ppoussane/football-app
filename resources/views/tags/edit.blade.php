@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Tags Edit Page</h1>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form action="{{ route('tags.update', $tag) }}" method="POST">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Tag Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Edit Tag Title Here" name="name" value="{{ old('tag', $tag->name) }}" autofocus>
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection