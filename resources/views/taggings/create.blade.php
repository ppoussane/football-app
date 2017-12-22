@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Post Title</th>
                        <th>Tags</th>
                        <th>management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach($post->tags as $tag)
                                    {{ $tag->name }}
                                @endforeach
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
                <form method="POST" action="{{ route('taggings.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="post_id" class="control-label">Select Post</label>
                        <select class="form-control" id="post_id" name="post_id">

                            @foreach ($posts as $post)

                                <option value='{{ $post->id }}'>{{ $post->title }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tag_id" class="control-label">Select Tag</label>
                        <select class="form-control" id="tag_id" name="tag_id">

                            @foreach ($tags as $tag)

                                <option value='{{ $tag->id }}'>{{ $tag->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection