<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container-lg py-5 ">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <ul class=" list-unstyled border border-1 border-black p-2 text-center ">
                            <li>Title: {{$movie->title}}</li>
                            <li>Original Title: {{$movie->original_title}}</li>
                            <li>Nationality: {{$movie->nationality}}</li>
                            <li>Release: {{$movie->date}}</li>
                            <li>Vote: {{$movie->vote}}</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>