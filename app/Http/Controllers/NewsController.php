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
            'pageSize' => 100,
        ]);
    
        dd($response->json());
    }
}