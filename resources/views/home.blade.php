@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    @include('layouts.main_post')
    @include('layouts.club_navbar')
    <div class="container">
        <div class="col-md-6" id="column-set">
            @foreach ($posts as $post)
                <div class="media">
                    <div class="media-left">
                        <a href="{{ route('posts.show', $post) }}"><img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:150px;"></a>
                    </div>
                    <div class="media-body">
                        <p><a href="/categories/{{ $post->category->id }}"><img src="{{ Storage::url($post->category->image) }}" style="width:15px;">
                                <small>{{ $post->category->name }}</small></a> |
                                <small>{{ $post->created_at->diffForHumans() }}</small> </p>

                        <div class="media-heading">
                            <a href="{{ route('posts.show', $post) }}"><h4>{{ $post->title }}</h4></a>
                        </div>
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
                            @if (Auth::check())
                                <a href="#" onclick="event.preventDefault();document.getElementById('like-{{ $post->id }}').submit();"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a href="{{ route('posts.show', $post) }}"><i class="fa fa-comments" aria-hidden="true"></i> </a>
                                <form id="like-{{ $post->id }}" action="{{ route('posts.like', $post) }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <a href="#" onclick="event.preventDefault();" data-toggle="tooltip" data-placement="top" title="{{ __('words.login-to-like') }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a href="{{ route('posts.show', $post) }}" data-toggle="tooltip" data-placement="top" title="{{ __('words.login-to-comment') }}"><i class="fa fa-comments" aria-hidden="true"></i> </a>
                            @endif
                        </p>
                    </div>
                </div>
                <hr>
            @endforeach
                {{ $posts->links() }}
        </div>

        @include('layouts.middle')

        @include ('layouts.sidebar')

    </div>
    @include ('layouts.gallery')
    <script src="../../js/main.js"></script>
@endsection