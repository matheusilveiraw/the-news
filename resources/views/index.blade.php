<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="bg-black text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <h1 class="text-2xl font-bold text-red-600">The News</h1>
                <button class="md:hidden focus:outline-none" id="menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="hidden md:flex space-x-4" id="menu">
                    <a href="#" class="hover:text-red-500">Início</a>
                    <a href="#" class="hover:text-red-500">Política</a>
                    <a href="#" class="hover:text-red-500">Esportes</a>
                    <a href="#" class="hover:text-red-500">Tecnologia</a>
                    <a href="#" class="hover:text-red-500">Entretenimento</a>
                </div>
            </div>
            <div class="relative">
                <button id="search-btn" class="focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z"></path>
                    </svg>
                </button>
                <input id="search-input" type="text" placeholder="Buscar..." class="hidden absolute right-0 top-0 px-3 py-1 rounded focus:outline-none focus:ring-2 focus:ring-red-500 text-black">
            </div>
        </div>
        <div class="md:hidden hidden p-4 space-y-2 bg-black text-white" id="mobile-menu">
            <a href="#" class="block hover:text-red-500">Início</a>
            <a href="#" class="block hover:text-red-500">Política</a>
            <a href="#" class="block hover:text-red-500">Esportes</a>
            <a href="#" class="block hover:text-red-500">Tecnologia</a>
            <a href="#" class="block hover:text-red-500">Entretenimento</a>
        </div>
    </nav>

    <div class="container mx-auto p-4">
        @if(isset($erro))
        <div class="bg-red-600 text-white p-4 rounded mb-4">
            <p>{{ $erro }}</p>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($noticias as $noticia)
            <div class="bg-white p-4 rounded shadow-md">
                @if(isset($noticia['image']) && $noticia['image'] !== 'None')
                <img src="{{ $noticia['image'] }}" alt="Image" class="w-full h-40 object-cover rounded mb-4">
                <h2 class="text-xl font-semibold text-black">{{ $noticia['title'] }}</h2>
                @else
                <h2 class="text-2xl font-semibold text-black">{{ $noticia['title'] }}</h2>
                @endif
                <p class="text-sm text-gray-600 mt-2">{!! \Illuminate\Support\Str::limit($noticia['description'], 300) !!}</p>
                <a href="{{ $noticia['url'] }}" class="text-red-600 mt-2 block hover:underline">Leia mais</a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    <footer class="bg-black py-3">
        <div class="container mx-auto text-center">
            <a href="https://github.com/matheusilveiraw" class="text-white hover:text-red-500 mx-2">
                <i data-feather="github" class="w-5 h-5 inline"></i>
                @matheusilveiraw
            </a>
            <span class="text-white">
                |
            </span>
            <span class="text-white hover:text-red-500">
                matheus.silveiraw@gmail.com
            </span>
        </div>
    </footer>
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        feather.replace();

        document.getElementById('menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        const searchBtn = document.getElementById('search-btn');
        const searchInput = document.getElementById('search-input');

        searchBtn.addEventListener('click', function() {
            searchInput.classList.toggle('hidden');
            searchInput.focus();
        });

        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                window.location.href = '/buscar?query=' + searchInput.value;
            }
        });
    </script>
</body>

</html>