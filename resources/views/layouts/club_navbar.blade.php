<link href="{{ asset('/css/mine.css') }}" rel="stylesheet">
<div class="container" id="club-container">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse-2">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    @foreach($clubs as $club)
                        <li><a href="/categories/{{ $club->id }}"><img src="{{ Storage::url($club->image) }}" alt="{{ $club->name }}" style="width: 35px; height: 35px"></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</div>