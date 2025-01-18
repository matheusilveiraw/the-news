<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Últimas Notícias</h1>

        @if(isset($erro))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                <p>{{ $erro }}</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($noticias as $noticia)
                    <div class="bg-white p-4 rounded shadow-md">
                        @if(isset($noticia['image']) && $noticia['image'] !== 'None')
                            <img src="{{ $noticia['image'] }}" alt="Image" class="w-full h-40 object-cover rounded mb-4">
                            <h2 class="text-xl font-semibold">{{ $noticia['title'] }}</h2>
                        @else
                            <h2 class="text-2xl font-semibold">{{ $noticia['title'] }}</h2>
                        @endif
                        <p class="text-sm text-gray-500 mt-2">{!! \Illuminate\Support\Str::limit($noticia['description'], 300) !!}</p>
                        <a href="{{ $noticia['url'] }}" class="text-blue-500 mt-2 block">Leia mais</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
