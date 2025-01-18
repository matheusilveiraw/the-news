<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $apiKey = env('CURRENTS_API_KEY');
        $apiUrl = env('CURRENTS_API_URL');
        
        $response = Http::timeout(50)->get("{$apiUrl}latest-news", [
            'apiKey' => $apiKey,
            'language' => 'pt',
            'limit' => 20,
        ]);
        
        if ($response->successful()) {
            $noticias = $response->json()['news'];
            return view('index', compact('noticias'));
        } else {
            return view('index')->with('erro', 'Não foi possível carregar as notícias.');
        }
    }
}
