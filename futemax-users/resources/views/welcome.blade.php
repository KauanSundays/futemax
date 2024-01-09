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
        <aside>
            @foreach ($games as $game)
                <div>
                    <h2>Partida: {{ $game->name_game }}</h2>
                    <p>Esporte: {{ $game->sport->name }}</p>
                    <!-- Adicione mais informações conforme necessário -->
                </div>
            @endforeach
        </aside>    
        
        
        <aside>
            <!-- Conteúdo do segundo bloco -->
        </aside>
    </section>
</body>
</html>
