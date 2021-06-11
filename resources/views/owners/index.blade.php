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
        @foreach ($owners as $owner)
            
            <a href=""><li>{{$owner->first_name}} {{$owner->surname}}</li></a>
        @endforeach


    </ul>
</body>
</html>