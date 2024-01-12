<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FuteMAX - Futebol - UFC</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header">
        <img class="logo" src="{{ asset('images/menu.png') }}" alt="Menu Logo">
        <img class="logo2" src="{{ asset('images/futemax.png') }}" alt="Menu Logo">
        <img class="background-image" src="{{ asset('images/fundo.jpg') }}" alt="">
    </header>
    <section class="green-section">
        <h1>Destaques</h1>
    </section>
    <section class="two-aside-section">
        <aside class="game-grid">
            @foreach ($games as $key => $game)
                <div class="game">
                    <h2>Partida: {{ $game->name_game }}</h2>
                    <p>Esporte: {{ $game->sport->sport_name }}</p>
                    <img src="{{ asset('storage/game_images/01HJ73D7RJG255JG2Y37BV7N9Z.jpg') }}" alt="Imagem do Jogo">
                </div>

                @if (($key + 1) % 2 === 0 || $loop->last)
                    <div class="clearfix"></div>
                @endif
            @endforeach
        </aside>

        <aside>
        </aside>
    </section>
</body>
</html>