<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias de Tecnologia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Notícias de Tecnologia</h1>

        @if(count($articles) > 0)
        <ul class="space-y-6">
            @foreach($articles as $article)
            <li class="bg-white p-6 rounded-lg shadow-md">
                <a href="{{ $article['url'] }}" target="_blank" class="text-xl font-semibold text-blue-600 hover:underline">{{ $article['title'] }}</a>
                <p class="mt-2 text-gray-700">{{ $article['description'] }}</p>
                @if($article['urlToImage'])
                <img src="{{ $article['urlToImage'] }}" alt="Imagem da Notícia" class="mt-4 w-full max-w-md mx-auto rounded-md">
                @endif
            </li>
            @endforeach
        </ul>
        @else
        <p class="text-center text-gray-600">Nenhuma notícia disponível no momento.</p>
        @endif
    </div>
</body>

</html>
