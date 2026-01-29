<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $occasion->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black font-sans">

<x-navbar />

<div class="max-w-7xl mx-auto px-6 py-12">
    <a href="{{ route('occasions.index') }}" class="inline-block mb-8 text-yellow-500 font-semibold hover:underline">
        &larr; Terug naar alle occasions
    </a>

    <div class="group relative bg-black rounded-2xl border border-yellow-500 shadow-lg overflow-hidden p-6 max-w-2xl mx-auto">
        <!-- VERKOCHT banner -->
        @if($occasion->sold)
            <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 font-bold z-10">VERKOCHT</div>
        @endif

        <!-- Occasion info -->
        <h1 class="text-3xl font-bold text-white mb-4">{{ $occasion->title }}</h1>
        <p class="text-gray-300 mb-2"><strong>Kenteken:</strong> {{ $occasion->plate }}</p>
        <p class="text-gray-300 mb-2"><strong>Prijs:</strong> €{{ number_format($occasion->price, 2, ',', '.') }}</p>
        <p class="text-gray-300 mb-2"><strong>Kilometerstand:</strong> {{ number_format($occasion->mileage, 0, ',', '.') }} km</p>
        <p class="text-gray-300 mt-4">{{ $occasion->description }}</p>

        <a href="/contact" class="inline-block mt-6 rounded-md bg-yellow-500 px-6 py-3 text-sm font-medium text-black hover:bg-yellow-600 transition">
            Interesse? Neem contact op
        </a>
    </div>
</div>


<x-footer />

</body>
</html>
