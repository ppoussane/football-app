@extends ('layouts.dashboard')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Week Title</th>
                        <th>Management</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($weeks as $week)
                        <tr>
                            <td>{{ $week->id }}</td>
                            <td>{{ $week->name }}</td>
                            <td>
                                <a href="{{ route('weeks.edit', $week->id) }}" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="#" class="btn btn-danger" onClick="event.preventDefault();document.getElementById('delete-post-{{ $week->id }}').submit();"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                <form id="delete-post-{{ $week->id }}" action="{{ route('weeks.destroy', $week) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-3">
                <form action="{{ route('weeks.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Week Title:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter Week Here" name="name">
                    </div>

                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection