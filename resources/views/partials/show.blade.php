<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Idea</h1>

    <ul>
        <li> Name : {{ $idea->name }}</li>
        <li> Description : {{ $idea->description }}</li>
        <li> Goal : {{ $idea->goal }}</li>
        <li> Idea Owner : {{ $idea->idea_owner }}</li>
    </ul>

    <div>
        <a href="/ideas/{{ $idea->id }}/edit"> Edit</a>
    </div>
</body>

</html>
