<!DOCTYPE html>
<html>
    <head>
        <title>Add New Comic</title>
    </head>
    <body>
        <h1>Add New Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <label for="title">Title:</label>
            <input type="text" id="title" name="title">

            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price">

            <label for="thumb">Thumb:</label>
            <input type="text" id="thumb" name="thumb">

            <label for="series">Series:</label>
            <input type="text" id="series" name="series">

            <label for="sale_date">Sale date:</label>
            <input type="date" id="sale_date" name="sale_date">

            <label for="type">Type:</label>
            <input type="text" id="type" name="type">

            <label for="artists">Artists:</label>
            <input artists="text" id="artists" name="artists">

            <label for="writers">Writers:</label>
            <input writers="text" id="writers" name="writers">

            <button type="submit">Add Comic</button>
        </form>
        <a href="{{ route('comics.index') }}">Back to list</a>
    </body>
</html>
