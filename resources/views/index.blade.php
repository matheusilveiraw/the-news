<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias de Tecnologia</title>
</head>

<body>
    <h1>Notícias de Tecnologia</h1>

    @if(count($articles) > 0)
    <ul>
        @foreach($articles as $article)
        <li>
            <a href="{{ $article['url'] }}" target="_blank">{{ $article['title'] }}</a>
            <p>{{ $article['description'] }}</p>
            @if($article['urlToImage'])
            <img src="{{ $article['urlToImage'] }}" alt="Imagem da Notícia" style="width: 100%; max-width: 600px; height: auto;">
            @endif
        </li>
        @endforeach
    </ul>
    @else
    <p>Nenhuma notícia disponível no momento.</p>
    @endif
</body>

</html>