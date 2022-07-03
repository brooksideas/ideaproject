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

        @forelse ($ideas as $item)
            <tr>
                <td> <a href="/ideas/{{$item->id}}">{{ $item->name }}</a> </td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->goal }}</td>
                <td>{{ $item->idea_owner }}</td>
            </tr>
        @empty
            <tr>
                <td> No Ideas Yet!</td>
            </tr>
        @endforelse


    </table>

    <hr>
    <h3>Add More Ideas</h3>
    <form action="/ideas" method="post">
        @csrf
        <input type="text" name="name" placeholder="idea name" style="display: block; margin-bottom: 16px;">
        <div style="color: red;">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <textarea name="description" rows="10" cols="30" style="display: block; margin-bottom: 16px;"
            placeholder="Idea Description"></textarea>
        <input type="number" name="goal" placeholder="goal" style="display: block; margin-bottom: 16px;">
        <input type="number" name="idea_owner" placeholder="idea Owner" style="display: block; margin-bottom: 16px;">
        <button> Add </button>

    </form>
</body>

</html>
