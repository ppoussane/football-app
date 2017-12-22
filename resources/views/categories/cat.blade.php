@extends('layouts.app')

@section ('content')
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">

    <div class="container" id="main-container-show">
        <div class="col-md-8">
            <h1>{{ __('words.related-to') }} <b>{{ $category->name }}</b></h1>
            <hr>
            @foreach ($posts as $post)
                <div class="media">
                    <div class="media-left">
                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:150px;">
                    </div>
                    <div class="media-body">
                        <p><a href="/categories/{{ $category->id }}"><small>{{ $category->name }}</small></a> <small>{{ $post->created_at->diffForHumans() }}</small> </p>
                        <div class="media-heading">
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div class="media-body">
                            <p>{{ $post->body }}</p>
                        </div>
                        <p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary" role="button"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
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
                <hr>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
@endsection