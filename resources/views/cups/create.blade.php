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
                        <th>Image</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($cups as $cup)
                        <tr>
                            <td>{{ $cup->id }}</td>
                            <td>{{ $cup->name }}</td>
                            <td><img src="{{ Storage::url($cup->image) }}" alt="{{ $cup->name }}" style="width:50px; height:50px"></td>
                            <td>
                                <a href="{{ route('cups.edit', $cup) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-post-{{ $cup->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

                                <form id="delete-post-{{ $cup->id }}" action="{{ route('cups.destroy', $cup) }}" method="POST">
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
                <form action="{{ Route('cups.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Cup Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter cup Title Here" name="name" autofocus>
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