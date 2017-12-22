@extends ('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Club</th>
                        <th>Flag</th>
                        <th>Management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($stadiums as $stadium)
                        <tr>
                            <td>{{ $stadium->id }}</td>
                            <td>{{ $stadium->name }}</td>
                            <td>{{ $stadium->club->name }}</td>
                            <td><img src="{{ Storage::url($stadium->image) }}" alt="{{ $stadium->name }}" style="width:50px; height:50px"></td>
                            <td>
                                <a href="{{ route('stadiums.edit', $stadium) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $stadium->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                <form id="delete-post-{{ $stadium->id }}" action="{{ route('stadiums.destroy', $stadium) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <form action="{{ Route('stadiums.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Stadium Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Stadium Title Here" name="name" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="capacity">Capacity Title:</label>
                        <input type="capacity" class="form-control" id="capacity" placeholder="Enter Capacity Title Here" name="capacity">
                    </div>

                    <div class="form-group">
                        <label for="city">City Title:</label>
                        <input type="city" class="form-control" id="city" placeholder="Enter City Title Here" name="city">
                    </div>

                    <div class="form-group">
                        <label for="club_id" class="control-label">Select Club</label>
                        <select class="form-control" id="club_id" name="club_id">

                            @foreach ($clubs as $club)

                                <option value='{{ $club->id }}'>{{ $club->name }}</option>

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