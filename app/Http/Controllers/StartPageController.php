<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;


class StartPageController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $location = $request->input('query', 'Berlin');
        $apiKey = 'c0ecdeef38275e0a5e00be57df784214';
        $apiError = null;
        $dummyData = json_decode(file_get_contents(base_path('database/data/dummy.json')));

           try {
            // Fetch weather data
            $response = Http::timeout(10)->get('https://api.weatherstack.com/current', [
                'access_key' => $apiKey,
                'query' => $location
            ]);

            if ($response->successful()) {
                $data = $response->json();
                }
            else {
                $data = $dummyData;
                $apiError = 'Hello User, there is an issue with the API: you see currently hardcoded data as fallback.';
            }

            } catch (\Exception $e) {
            \Log::error('API fetch failed: ' . $e->getMessage());

            // fallback data for failed api request
            $data = $dummyData;
            $apiError = 'Hello User, there is an issue with the API: you see currently hardcoded data as fallback.';
            }

            return Inertia::render('StartPage', [
            'data' => $data,
            'currentLocation' => $location,
            'apiError' => $apiError,
        ]);
    }
}





