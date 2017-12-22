@extends ('layouts.app')

@section( 'content')
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ Storage::url($player->image) }}" alt="{{ $player->name }}" class="img-circle" style="height: 150px; width: 150px;">
                </div>

                <div class="col-md-3">
                    <h1>{{ $player->nicName }}</h1>
                    <small>{{ $player->name }}</small>
                </div>

                <div class="col-md-7">
                    <p>@foreach ($player->clubs as $club)
                            @if($player->clubs->last() === $club)
                                <img src="{{ Storage::url($club->image) }}" alt="{{ $club->name }}" class="img-circle" style="height: 50px; width: 50px;">
                                {{ $club->name }}
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p><b>Birth Date:</b> {{ $player->birthDate }}</p>
                <p><b>Nationality:</b> {{ $player->country->name }}</p>
            </div>
            <div class="col-md-4">
                <p><b>Position:</b> {{ $player->position }}</p>
                <p><b>Height:</b> {{ $player->height }}</p>
            </div>
            <div class="col-md-4">
                <p>@foreach ($player->clubs as $club)
                        @if($player->clubs->last() === $club)
                            <b>Club:</b> {{ $club->name }}
                        @endif
                    @endforeach
                </p>
            </div>
        </div>

        <hr>
        <h4><i class="fa fa-pencil" aria-hidden="true"></i> <b>Stats</b></h4>

        <table class="table">
            <thead>
            <tr>
                <th>League</th>
                <th><i class="fa fa-soccer-ball-o" aria-hidden="true"></i> Goals</th>
                <th>Dribble</th>
                <th>Pass</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($stats as $stat)
            <tr>
                <td>{{ $stat->league->name }}</td>
                <td>{{ $stat->goal }}</td>
                <td>{{ $stat->dribble }}</td>
                <td>{{ $stat->pass }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

        <table class="table">
            <thead>
            <tr>
                <th>Season</th>
                <th>Club</th>
                <th>Goal</th>
            </tr>
            </thead>

            <tbody>
            @foreach($stats as $stat)
            <tr>
                <td>{{ $stat->season->name }}</td>
                <td>{{ $stat->club->name }}</td>
                <td>{{ $stat->goal }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <hr>

        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Cups</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Prizes</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    @foreach($titles as $title)
                        <div>
                            <img src="{{ storage::url($title->cup->image) }}" style="width: 40px;">
                            {{ $title->cup->name }}
                        </div>
                        <div>{{ $title->club->name }}</div>
                        {{ $title->season->name }}
                        <h2>{{ $title->count() }} Times</h2>
                        <hr>
                    @endforeach

                </div>

                <div role="tabpanel" class="tab-pane" id="profile">

                </div>
            </div>

        </div>
    </div>
@endsection

