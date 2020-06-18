@extends('layouts.main')

@section('content')
    <div class="NewStudent">
        <div class="NewStudent-header mb-4">
            <h1>Edit student</h1>
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
        @endif
        
        <form class="NewStudent-form" action="{{ route('students.update', $student->id) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Name *</label>
                <input id="name" class="form-control mb-3" type="text" name="name" placeholder="Insert name..." value="{{ old('name',  $student->name) }}">
            </div>
            <div class="form-group">
                <label for="description">Description *</label>
                <input id="description" class="form-control mb-3" type="text" name="description" placeholder="Describe the student..." value="{{ old('description', $student->description) }}">
            </div>                
                
                {{-- Submit --}}
            <input class="btn btn-primary mt-4 float-right" type="submit" value="Confirm">
        </form>
    </div>
@endsection