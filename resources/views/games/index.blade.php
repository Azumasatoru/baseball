<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>試合結果</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

    </head>
    <body>
        @foreach ($games as $game)
            <h1 class='title' style="text-align: center;">{{ $game->date }} {{ $game->tournament_name }} 結果</h1>
            <h1 class='location' style="text-align: right;" >at {{ $game->location }}</h1>
            
            
            <div class='result' style="text-align: center;">
                <h2>{{ $game->team->name }} {{ $game->get_point }} - {{ $game->lost_point }} {{ $game->opponent }}</h2>
            </div>
            
        @endforeach
    </body>
</html>
