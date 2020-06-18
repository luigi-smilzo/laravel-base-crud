@extends('layouts.main')

@section('content')
    {{-- Session check --}}
    @if( session('deleted') )
        <div class="alert alert-success">
            {{ session('deleted') }} deleted
        </div>
    @endif

    <div class="Students">
        <div class="Students-header">
            <h1 class="mb-4">Students</h1>
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
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-success">
                                    Show
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                                    Update
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection