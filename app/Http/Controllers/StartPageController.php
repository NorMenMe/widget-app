<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;


class StartPageController extends Controller
{
    public function index()
    {
        try {
            // fetch API
            $response = Http::timeout(10)->get('https://api.weatherstack.com/current?access_key=c0ecdeef38275e0a5e00be57df784214&query=Berlin');

            $data = $response->successful() ? $response->json() : [];

        } catch (\Exception $e) {
            $data = [];
            \Log::error('API fetch failed: ' . $e->getMessage());
        }

        return Inertia::render('StartPage', [
            'posts' => $data,
            'apiError' => empty($data) ? 'Failed to fetch data' : null,
        ]);
    }
}
