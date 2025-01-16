<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => env('NEWS_API_KEY')
        ])->get(env('NEWS_API_URL') . 'top-headlines', [
            'language' => 'en',
            'pageSize' => 100,
            'sortBy' => 'publishedAt',
        ]);

        $articles = $response->json()['articles'];

        return view('index', compact('articles'));
    }
}
