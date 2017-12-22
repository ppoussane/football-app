@extends ('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Club Title</th>
                        <th>Logo</th>
                        <th>Manager</th>
                        <th>Chairman</th>
                        <th>Found</th>
                        <th>Website</th>
                        <th>Country</th>
                        <th>Management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($clubs as $club)
                        <tr>
                            <td>{{ $club->id }}</td>
                            <td>{{ $club->name }}</td>
                            <td><img src="{{ Storage::url($club->image) }}" alt="{{ $club->name }}" style="width:50px; height:50px"></td>
                            <td>{{ $club->manager }}</td>
                            <td>{{ $club->chairman }}</td>
                            <td>{{ $club->found }}</td>
                            <td>{{ $club->website }}</td>
                            <td>{{ $club->country->name }}</td>
                            <td>
                                <a href="{{ route('clubs.show', $club) }}" class="btn btn-primary" role="button"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                <a href="{{ route('clubs.edit', $club) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $club->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                <form id="delete-post-{{ $club->id }}" action="{{ route('clubs.destroy', $club) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-2 col-md-offset-1">
                <form action="{{ Route('clubs.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Club Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Club Title Here" name="name" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="manager">Manager Title:</label>
                        <input type="manager" class="form-control" id="manager" placeholder="Enter Manager Title Here" name="manager">
                    </div>

                    <div class="form-group">
                        <label for="chairman">Chairman Title:</label>
                        <input type="chairman" class="form-control" id="chairman" placeholder="Enter Chairman Title Here" name="chairman">
                    </div>

                    <div class="form-group">
                        <label for="found">Found:</label>
                        <input type="date" class="form-control" id="found" placeholder="Enter Found Title Here" name="found">
                    </div>

                    <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="website" class="form-control" id="website" placeholder="Enter Website Title Here" name="website">
                    </div>

                    <div class="form-group">
                        <label for="country_id" class="control-label">Select Country</label>
                        <select class="form-control" id="country_id" name="country_id">

                            @foreach ($countries as $country)

                                <option value='{{ $country->id }}'>{{ $country->name }}</option>

                                @endforeach

                        </select>
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

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection