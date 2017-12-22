<div class="col-md-3">
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">

    <h4><b>{{ __('words.bests') }}</b></h4>
    <table class="table table-hover polaroid" id="table-bests">
        <thead id="table-bests-head">
        <tr>
            <th>{{ __('words.best-forwards') }}</th>
            <th>{{ __('words.club') }}</th>
            <th>{{ __('words.goal') }}</th>
        </tr>
        </thead>
        <tbody>
             @foreach($best_forwards as $forward)
                <tr>
                    <td><img src="{{ Storage::url($forward->player->image) }}" alt="{{ $forward->player->nicName }}" style="width: 35px"> {{ $forward->player->nicName }}</td>
                    <td>{{ $forward->club->name }}</td>
                    <td>{{ $forward->goal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-hover polaroid" id="table-bests">
        <thead id="table-bests-head">
        <tr>
            <th><small>{{ __('words.more-assist') }}</small></th>
            <th>{{ __('words.club') }}</th>
            <th>{{ __('words.pass') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($more_assists as $assist)
            <tr>
                <td><img src="{{ Storage::url($assist->player->image) }}" alt="{{ $assist->player->nicName }}" style="width: 35px"> {{ $assist->player->nicName }}</td>
                <td>{{ $assist->club->name }}</td>
                <td>{{ $assist->assist }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table table-hover polaroid" id="table-bests">
        <thead id="table-bests-head">
        <tr>
            <th>{{ __('words.more-pass') }}</th>
            <th>{{ __('words.club') }}</th>
            <th>{{ __('words.pass') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($more_passes as $pass)
            <tr>
                <td><img src="{{ Storage::url($pass->player->image) }}" alt="{{ $pass->player->nicName }}" style="width: 35px"> {{ $pass->player->nicName }}</td>
                <td>{{ $pass->club->name }}</td>
                <td>{{ $pass->pass }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table table-hover polaroid" id="table-bests">
        <thead id="table-bests-head">
        <tr>
            <th>{{ __('words.dribble') }}</th>
            <th>{{ __('words.club') }}</th>
            <th>{{ __('words.count') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($more_dribbles as $dribble)
            <tr>
                <td><img src="{{ Storage::url($dribble->player->image) }}" alt="{{ $dribble->player->nicName }}" style="width: 35px"> {{ $dribble->player->nicName }}</td>
                <td>{{ $dribble->club->name }}</td>
                <td>{{ $dribble->dribble }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>