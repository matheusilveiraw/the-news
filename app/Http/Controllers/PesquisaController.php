<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesquisaController extends Controller
{
    public function buscar(Request $request)
    {
        $query = $request->query('query');

        $apiKey = env('CURRENTS_API_KEY');
        $apiUrl = env('CURRENTS_API_URL');

        if (!$query) {
            return redirect()->route('index')->with('erro', 'Digite algo para pesquisar.');
        }

        $url = "{$apiUrl}search?apiKey={$apiKey}&language=en&keywords={$query}";

        $response = Http::timeout(100)->get($url);

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
