<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

            dd($noticias);
            
            return view('index', compact('noticias'));
        } else {
            return view('index')->with('erro', 'Não foi possível carregar as notícias.');
        }
    }
}
