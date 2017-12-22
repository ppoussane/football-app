@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><img src="{{ Storage::url($post->image) }}" alt="{{ $post->name }}" style="width:50px; height:50px"></td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $post->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                <form id="delete-post-{{ $post->id }}" action="{{ route('posts.destroy', $post) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-2">
                <form class="form-horizontal" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="radio">
                        <label>
                            <input type="radio" name="ordinary" id="ordinary" value="1" checked>
                            Ordinary Post
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="ordinary" id="ordinary" value="0">
                            Main Post
                        </label>
                    </div>

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="control-label">Title</label>
                        <input id="title" type="text" class="form-control" name="title" required>

                        @if ($errors->has('title'))
                            <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body" class="control-label">Body</label>
                        <textarea id="body" rows="7" class="form-control" name="body"></textarea>

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
                        <label for="category_id" class="control-label">Select Category</label>
                        <select class="form-control" id="category_id" name="category_id">

                            @foreach ($categories as $category)

                                <option value='{{ $category->id }}'>{{ $category->name }}</option>

                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection