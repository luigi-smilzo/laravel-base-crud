<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database test</title>
    <style>body{font-family:sans-serif;max-width:900px;margin:0 auto;}</style>
</head>
<body>
    <h1>My first queries</h1>
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
</body>
</html>