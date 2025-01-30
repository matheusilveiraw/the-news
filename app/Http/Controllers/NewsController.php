<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function Psy\debug;

class NewsController extends Controller
{
    public function index()
    {
        $chaveApi = env('CURRENTS_API_KEY');
        $urlApi = env('CURRENTS_API_URL');

        $resposta = Http::timeout(50)->get("{$urlApi}latest-news", [
            'apiKey' => $chaveApi,
            'language' => 'en',
            'limit' => 20,
        ]);

        if ($resposta->successful()) {
            $noticias = $resposta->json()['news'];

            return view('index', compact('noticias'));
        } else {
            return view('index')->with('erro', 'Não foi possível carregar as notícias.');
        }
    }

    public function pesquisaPolitica()
    {
        $apiKey = env('CURRENTS_API_KEY');
        $apiUrl = env('CURRENTS_API_URL');

        $url = "{$apiUrl}search?apiKey={$apiKey}&language=en&keywords=politics";

        $response = Http::timeout(20)->get($url);

        if ($response->successful()) {
            $noticias = $response->json()['news'];

            if (empty($noticias)) {
                return view('index')->with('erro', 'Nenhuma notícia encontrada para "futebol".');
            }

            return view('index', compact('noticias'));
        } else {
            return view('index')->with('erro', 'Não foi possível carregar as notícias.');
        }
    }

    public function pesquisaEsportes()
    {
        $apiKey = env('CURRENTS_API_KEY');
        $apiUrl = env('CURRENTS_API_URL');

        $url = "{$apiUrl}search?apiKey={$apiKey}&language=en&keywords=sports";

        $response = Http::timeout(20)->get($url);

        if ($response->successful()) {
            $noticias = $response->json()['news'];

            if (empty($noticias)) {
                return view('index')->with('erro', 'Nenhuma notícia encontrada para "esportes".');
            }

            return view('index', compact('noticias'));
        } else {
            return view('index')->with('erro', 'Não foi possível carregar as notícias.');
        }
    }

    public function pesquisaTecnologia()
    {
        $apiKey = env('CURRENTS_API_KEY');
        $apiUrl = env('CURRENTS_API_URL');

        $url = "{$apiUrl}search?apiKey={$apiKey}&language=en&keywords=technology";

        $response = Http::timeout(20)->get($url);

        if ($response->successful()) {
            $noticias = $response->json()['news'];

            if (empty($noticias)) {
                return view('index')->with('erro', 'Nenhuma notícia encontrada para "tecnologia".');
            }

            return view('index', compact('noticias'));
        } else {
            return view('index')->with('erro', 'Não foi possível carregar as notícias.');
        }
    }
}
