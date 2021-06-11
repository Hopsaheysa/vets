<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
    @foreach($pets as $pet) 
        <li>{{ $pet->name }}  </li>
        <div>
            <h2>{{$pet->owner_id}}</h2>
            <img  style="width:250px" src="\images\{{$pet->photo_path}}">
        </div>

    @endforeach
    </ul>
</body>
</html>