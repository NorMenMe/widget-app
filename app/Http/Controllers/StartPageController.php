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
        $apiKey = 'c0ecdeef38275e0a5e00be57df784214';
        $dummyData = file_get_contents(base_path('database/data/dummy.json'));
        $apiError = null;
        $apiErrorText = 'Hello User, there is an issue with the API; you see currently hardcoded data as fallback';

           try {
            // Fetch weather data
            $response = Http::timeout(10)->get('https://api.weatherstack.com/current', [
                'access_key' => $apiKey,
                'query' => $location
            ]);

            $data = $response->successful() ? $response->json() : [];

            } catch (\Exception $e) {
            \Log::error('API fetch failed: ' . $e->getMessage());
            }

            // fallback data for failed api request
            if (empty($data)) {
                $data = json_decode($dummyData, true);
                $apiError = $apiErrorText;
            }

            return Inertia::render('StartPage', [
            'data' => $data,
            'currentLocation' => $location,
            'apiError' => $apiError,
        ]);
    }
}





