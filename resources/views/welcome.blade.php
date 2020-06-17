
@extends('layouts.main')

@section('content')
    <h1 class="text-center">My first queries</h1>
    <div>
        @foreach($queries as $collection)
            <hr>
            @foreach($collection as $student)
                <h4>{{ $student->name }}</h4>
                <p>{{ $student->description }}</p>
            @endforeach
        @endforeach

        <h4>{{ $first_query->name }}</h4>
        <p>{{ $first_query->description }}</p>
        <hr>
        
        <h4>{{ $find_query->name }}</h4>
        <p>{{ $find_query->description }}</p>
        <hr>
    </div>
@endsection
