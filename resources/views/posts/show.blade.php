@extends ('layouts.app')

@section('content')
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">

    <div class="container" id="main-container-show">
        <div class="col-sm-8">
            <div class="thumbnail">
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                <div class="caption">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <p><small>{{ $post->created_at->diffForHumans() }}</small></p>
                    <p>
                        @can('update-post', $post)
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                        @endcan
                        @can('delete-post', $post)
                            <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $post->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                    <form id="delete-post-{{ $post->id }}" action="{{ route('posts.destroy', $post) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
                    @endcan
                    </p>
                    <p>
                        Likes: {{ $post->likes->count() }}
                        @if (Auth::check())
                            <a href="#" class="btn btn-success" onclick="event.preventDefault();document.getElementById('like-{{ $post->id }}').submit();"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>

                    <form id="like-{{ $post->id }}" action="{{ route('posts.like', $post) }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                    @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="comment">
                <ul class="list-group">
                    @foreach ($post->comments as $comment)
                        <li class="list-group-item">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }}: &nbsp;
                            </strong>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <hr>

            <div>
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection