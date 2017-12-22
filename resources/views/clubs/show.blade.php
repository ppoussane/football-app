@extends ('layouts.app')

@section( 'content')
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ Storage::url($club->image) }}" alt="{{ $club->name }}" style="height: 150px; width: 150px;">
                </div>

                <div class="col-md-3">
                    <h1>{{ $club->name }}</h1>
                </div>

                <div class="col-md-7">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h3>Club</h3>
                    <hr>
                    <p><b>Country: </b>{{ $club->country->name }}</p>
                    <p><b>manager: </b>{{ $club->manager }}</p>
                    <p><b>chairman: </b>{{ $club->chairman }}</p>
                    <p><b>found: </b>{{ $club->found }}</p>
                    <p><b>website: </b>{{ $club->website }}</p>
                </div>

                <div class="col-md-4">
                    <h3>Stadium</h3>
                    <hr>
                    <p><b>Stadium: </b>{{ $club->stadium->name }}</p>
                    <p><b>Capacity: </b>{{ $club->stadium->capacity }}</p>
                    <p><b>City: </b>{{ $club->stadium->city }}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ storage::url($club->stadium->image) }}" alt="{{ $club->stadium->name }}" style="width: 350px;">
                </div>
            </div>
        </div>

        <hr>

        @foreach($post->tags as $tag)
            {{  }}
        @endforeach

    </div>
@endsection