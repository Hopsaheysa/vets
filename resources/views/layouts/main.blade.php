<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Vets</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goudy+Bookletter+1911&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href= {{mix('css/style.css')}}> --}}

</head>
<body>

    @include('partials.header', [
        'current' => $current_menu_item ?? null
    ])
   

    @include('partials.messages')
   
    <main>
    @yield('content')
    </main>
</body>
</html>