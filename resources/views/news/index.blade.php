<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top News</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body>
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-6">Search News</h1>

    <!-- Form Pencarian -->
    <form method="GET" action="/news" class="mb-8">
        <input type="text" name="q" value="{{ $query ?? '' }}" class="border rounded p-2 w-full md:w-1/2 lg:w-1/3" placeholder="Search for news...">
        <button type="submit" class="bg-blue-500 text-white p-2 rounded ml-2">Search</button>
    </form>

    <h2 class="text-3xl font-bold mb-4">Top News Headlines</h2>

    @if (isset($articles) && count($articles) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($articles as $article)
                <div class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold mb-2">
                        <a href="{{ $article['url'] }}" target="_blank" class="text-blue-500 hover:underline">
                            {{ $article['title'] }}
                        </a>
                    </h3>
                    <p class="text-gray-600 mb-4">{{ $article['description'] }}</p>
                    <p class="text-sm text-gray-500">Published on: {{ $article['publishedAt'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600">No news found.</p>
    @endif
</div>




</body>
</html>
