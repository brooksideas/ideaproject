<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Edit</h1>
    <form action="/ideas/{{ $idea->id }}" method="post">
        @method('PATCH')

        <ul>
            <li> Name : <input type="text" name="name" placeholder="idea name edit" value="{{ $idea->name }}">
            </li>
            <li> Description : <input type="text" name="description" placeholder="idea description edit"
                    value="{{ $idea->description }}"> </li>
            <li> Goal : <input type="text" name="goal" placeholder="New Goal" value="{{ $idea->goal }}"> </li>
            <li> Idea Owner : <input type="text" name="idea_owner" placeholder="new Owner"
                    value=" {{ $idea->idea_owner }}"> </li>
        </ul>

        @csrf

        <button>Update</button>
    </form>

</body>

</html>
