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

    <main>
        <div class="container">
            <h1>Lista film</h1>

            <div class="row row-cols-3 g-4 py-5">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card shadow p-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                                <p class="card-text d-flex flex-column">
                                    <span>Nazionalit&agrave;:</span>
                                    <small>{{ $movie->nationality }}</small>

                                    <span>Data di uscita:</span>
                                    <small>{{ $movie->date }}</small>

                                    <span>Voto: {{ $movie->vote }}</span>
                                    <small></small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
