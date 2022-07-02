<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Idea Store</title>
</head>

<body>

    <h1>Welcome to Idea Store</h1>

    <h3>List of Ideas</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Goal</th>
            <th>Owner Id</th>
        </tr>

        @foreach ($ideas as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->goal }}</td>
                <td>{{ $item->idea_owner }}</td>
            </tr>
        @endforeach


    </table>
</body>

</html>
