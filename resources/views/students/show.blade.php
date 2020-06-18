@extends('layouts.main')

@section('content')
    <div class="StudentShow">
        <div class="StudentShow-header mb-4">
            <h1>Show: {{ $student->name }}</h1>
        </div>
        
        <div class="StudentShow-infos">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>ID:</strong> {{ $student->id }}
                </li>
                <li class="list-group-item">
                    <strong>Name:</strong> {{ $student->name }}
                </li>
                <li class="list-group-item">
                    <strong>Description:</strong> {{ $student->description }}
                </li>
            </ul>
        </div>
    </div>
@endsection