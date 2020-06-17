@extends('layouts.main')

@section('content')
    <div class="Students">
        <div class="Students-header">
            <h1>Students</h1>
        </div>
        <div class="Students-table">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach($students as $key => $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->description }}</td>
                            <td><a href="#" class="btn btn-success">Show</a></td>
                            <td><a href="#" class="btn btn-warning">Show</a></td>
                            <td><a href="#" class="btn btn-danger">Show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection