@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Post Edit Page</h1>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form class="form-horizontal" method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="control-label">Title</label>
                        <input id="title" type="text" class="form-control" name="title" required value="{{ old('title', $post->title) }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body" class="control-label">Body</label>
                        <textarea id="body" rows="7" class="form-control" name="body" required>{{ old('body', $post->body) }}</textarea>

                        @if ($errors->has('body'))
                            <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                            </span>
                        @endif

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

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection