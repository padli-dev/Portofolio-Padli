<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class JokeController extends Controller
{
    /**
     * Fetch a random joke from JokeAPI
     */
    public function getRandomJoke()
    {
        try {
            $response = Http::get('https://official-joke-api.appspot.com/random_joke');
            
            if ($response->successful()) {
                return response()->json($response->json());
            }
            
            return response()->json([
                'error' => 'Failed to fetch joke'
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Fetch a random joke by type (general, programming, knock-knock)
     */
    public function getJokeByType($type = 'general')
    {
        try {
            $validTypes = ['general', 'programming', 'knock-knock'];
            
            if (!in_array($type, $validTypes)) {
                return response()->json([
                    'error' => 'Invalid type. Valid types are: ' . implode(', ', $validTypes)
                ], 400);
            }

            $response = Http::get("https://official-joke-api.appspot.com/jokes/{$type}/random");
            
            if ($response->successful()) {
                return response()->json($response->json());
            }
            
            return response()->json([
                'error' => 'Failed to fetch joke'
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display joke page
     */
    public function showJokePage()
    {
        return view('joke');
    }
}
