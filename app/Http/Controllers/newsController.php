<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiKey = 'dfdd33050b8a4fe9909f2c46bcaef59c'; // Masukkan API Key dari NewsAPI
        $url = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=' . $apiKey;

        // Menggunakan Laravel HTTP Client untuk melakukan request API
        $response = Http::get($url);

        // Mengecek apakah request berhasil
        if ($response->successful()) {  
            // Menyimpan hasil response
            $articles = $response->json()['articles'];

            // Kirim data ke view
            return view('news.index', compact('articles'));
        } else {
            return response()->json(['error' => 'Unable to fetch news'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
