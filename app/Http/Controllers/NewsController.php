<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => env('NEWS_API_KEY')
    ])->get(env('NEWS_API_URL') . 'everything', [
        'q' => 'tecnologia',
        'language' => 'pt',
        'pageSize' => 5,
    ]);

        // dd($response->json());

        $articles = $response->json()['articles'] ?? [];

        return view('index', compact('articles'));
    }
}