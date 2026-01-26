<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;


class StartPageController extends Controller
{
    public function index(Request $request)
    {
        $location = $request->input('query', 'Berlin');
        $apiKey = env('WEATHERSTACK_API_KEY');

           try {
            // Fetch weather data
            // $response = Http::timeout(10)->get('https://api.weatherstack.com/current', [
            //     'access_key' => $apiKey,
            //     'query' => $location
            // ]);

            $data = $response->successful() ? $response->json() : [];

            } catch (\Exception $e) {
            $data = [];
            \Log::error('API fetch failed: ' . $e->getMessage());
            }

            return Inertia::render('StartPage', [
            'data' => $data,
            'currentLocation' => $location,
            'apiError' => empty($data) ? 'Failed to fetch data' : null,
        ]);
    }
}





