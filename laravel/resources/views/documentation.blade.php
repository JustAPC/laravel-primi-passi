<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Primi passi su Laravel</title>
</head>

<body style="background-image: url(https://images6.alphacoders.com/676/thumb-1920-676642.png); background-size:cover">
    <header class=" w-50 d-flex justify-content-between mx-auto py-5">
        <h1 style="color: white">Documentation</h1>
        <ul>
            @foreach ($menuItems as $item)
                <a href="{{ $item['link'] }}">
                    <li>{{ $item['page'] }}</li>
                </a>
            @endforeach
        </ul>
    </header>
</body>
