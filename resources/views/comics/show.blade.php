<!DOCTYPE html>
<html>
    <head>
        <title>{{ $comic->title }}</title>
    </head>
    <body>
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
        <p>{{ $comic->artists }}</p>
        <p>{{ $comic->writers }}</p>
        <a href="{{ route('comics.index') }}">Back to list</a>
    </body>
</html>